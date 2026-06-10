function mapRange(value, fromLow, fromHigh, toLow, toHigh) {
    if (fromLow === fromHigh) return toLow;
    return toLow + ((value - fromLow) / (fromHigh - fromLow)) * (toHigh - toLow);
}

export function initEtherealShadow(container, options = {}) {
    const {
        color = 'rgba(128, 128, 128, 1)',
        animationScale = 100,
        animationSpeed = 90,
        noiseOpacity = 1,
        noiseScale = 1.2,
        sizing = 'fill',
    } = options;

    const id = 'ethereal-' + Math.random().toString(36).slice(2, 9);
    const displacementScale = mapRange(animationScale, 1, 100, 20, 100);
    const animationDuration = mapRange(animationSpeed, 1, 100, 1000, 50) / 25; // seconds per full rotation
    const baseFreqX = mapRange(animationScale, 0, 100, 0.001, 0.0005);
    const baseFreqY = mapRange(animationScale, 0, 100, 0.004, 0.002);

    // Inner wrapper — inset compensates for displacement overflow
    const inner = document.createElement('div');
    inner.style.cssText = `position:absolute;inset:-${displacementScale}px;filter:url(#${id}) blur(4px);`;

    // SVG filter (mirrors original exactly)
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.style.cssText = 'position:absolute;width:0;height:0;overflow:hidden;';
    svg.innerHTML = `
        <defs>
            <filter id="${id}">
                <feTurbulence result="undulation" numOctaves="2"
                    baseFrequency="${baseFreqX},${baseFreqY}"
                    seed="0" type="turbulence"/>
                <feColorMatrix id="${id}-hue" in="undulation" type="hueRotate" values="180"/>
                <feColorMatrix in="dist" result="circulation" type="matrix"
                    values="4 0 0 0 1  4 0 0 0 1  4 0 0 0 1  1 0 0 0 0"/>
                <feDisplacementMap in="SourceGraphic" in2="circulation"
                    scale="${displacementScale}" result="dist"/>
                <feDisplacementMap in="dist" in2="undulation"
                    scale="${displacementScale}" result="output"/>
            </filter>
        </defs>
    `;
    inner.appendChild(svg);

    // Masked color layer
    const colorDiv = document.createElement('div');
    colorDiv.style.cssText = `
        background-color:${color};
        mask-image:url('https://framerusercontent.com/images/ceBGguIpUU8luwByxuQz79t7To.png');
        -webkit-mask-image:url('https://framerusercontent.com/images/ceBGguIpUU8luwByxuQz79t7To.png');
        mask-size:${sizing === 'stretch' ? '100% 100%' : 'cover'};
        -webkit-mask-size:${sizing === 'stretch' ? '100% 100%' : 'cover'};
        mask-repeat:no-repeat;
        -webkit-mask-repeat:no-repeat;
        mask-position:center;
        -webkit-mask-position:center;
        width:100%;
        height:100%;
    `;
    inner.appendChild(colorDiv);
    container.appendChild(inner);

    // Noise overlay
    if (noiseOpacity > 0) {
        const noise = document.createElement('div');
        noise.style.cssText = `
            position:absolute;inset:0;
            background-image:url('https://framerusercontent.com/images/g0QcWrxr87K0ufOxIUFBakwYA8.png');
            background-size:${noiseScale * 200}px;
            background-repeat:repeat;
            opacity:${noiseOpacity / 2};
            pointer-events:none;
        `;
        container.appendChild(noise);
    }

    // Animate hue rotation via rAF
    const hueEl = svg.querySelector(`#${id}-hue`);
    let startTime = null;
    let animId;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReducedMotion && hueEl) {
        function animate(timestamp) {
            if (!startTime) startTime = timestamp;
            const hue = (((timestamp - startTime) / 1000) / animationDuration) * 360 % 360;
            hueEl.setAttribute('values', String(hue));
            animId = requestAnimationFrame(animate);
        }
        animId = requestAnimationFrame(animate);
    }

    return () => {
        cancelAnimationFrame(animId);
    };
}
