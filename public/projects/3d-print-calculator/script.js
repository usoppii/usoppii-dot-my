document.addEventListener('DOMContentLoaded', () => {
    // Select all inputs including radio buttons
    const inputs = document.querySelectorAll('input');

    // Typical 1kg spool prices in Malaysia (RM). Rough starting points —
    // overwrite the Filament Cost field with what you actually paid.
    const materialDefaults = {
        PLA: 45,
        PETG: 55,
        TPU: 75,
        ABS: 50
    };

    function applyMaterialPreset() {
        const checked = document.querySelector('input[name="filamentType"]:checked');
        const type = checked ? checked.value : "PLA";
        if (materialDefaults[type] !== undefined) {
            document.getElementById('filamentCost').value = materialDefaults[type];
        }
    }

    function calculateCost() {
        const projectName = document.getElementById('projectName').value || 'My Project';

        // Correctly get value from checked radio button
        const filamentTypeElement = document.querySelector('input[name="filamentType"]:checked');
        const filamentType = filamentTypeElement ? filamentTypeElement.value : "PLA";

        const filamentCostPerKg = parseFloat(document.getElementById('filamentCost').value) || 0;
        const filamentUsedGrams = parseFloat(document.getElementById('filamentUsed').value) || 0;
        const printTimeHours = parseFloat(document.getElementById('printTimeHours').value) || 0;
        const printTimeMinutes = parseFloat(document.getElementById('printTimeMinutes').value) || 0;
        const printerPower = parseFloat(document.getElementById('printerPower').value) || 0;
        const electricityRate = parseFloat(document.getElementById('electricityRate').value) || 0;
        const laborTimeMinutes = parseFloat(document.getElementById('laborTime').value) || 0;
        const laborCostPerHour = parseFloat(document.getElementById('laborCost').value) || 0;
        const machineWearCostPerHour = parseFloat(document.getElementById('machineWearCost').value) || 0;
        const failureBufferPct = (parseFloat(document.getElementById('failureBuffer').value) || 0) / 100;
        const profitMargin = (parseFloat(document.getElementById('profitMargin').value) || 0) / 100;

        document.getElementById('summaryProjectName').textContent = projectName;
        document.getElementById('summaryFilamentType').textContent = filamentType;

        const totalPrintTimeInHours = printTimeHours + (printTimeMinutes / 60);

        const filamentCost = (filamentUsedGrams / 1000) * filamentCostPerKg;
        const electricityCost = (printerPower / 1000) * totalPrintTimeInHours * electricityRate;
        const machineWearCost = machineWearCostPerHour * totalPrintTimeInHours;
        const laborCost = (laborTimeMinutes / 60) * laborCostPerHour;

        const totalProductionCost = filamentCost + electricityCost + machineWearCost + laborCost;

        // Failure buffer is treated as a cost (insurance against wasted prints),
        // so profit is applied on top of cost + buffer.
        const failureBuffer = totalProductionCost * failureBufferPct;
        const adjustedCost = totalProductionCost + failureBuffer;
        const profit = adjustedCost * profitMargin;
        const finalPrice = adjustedCost + profit;

        document.getElementById('resultFilament').textContent = `RM ${filamentCost.toFixed(2)}`;
        document.getElementById('resultElectricity').textContent = `RM ${electricityCost.toFixed(2)}`;
        document.getElementById('resultMachineWear').textContent = `RM ${machineWearCost.toFixed(2)}`;
        document.getElementById('resultLabor').textContent = `RM ${laborCost.toFixed(2)}`;
        document.getElementById('resultTotalCost').textContent = `RM ${totalProductionCost.toFixed(2)}`;
        document.getElementById('resultFailureBuffer').textContent = `RM ${failureBuffer.toFixed(2)}`;
        document.getElementById('resultProfit').textContent = `RM ${profit.toFixed(2)}`;
        document.getElementById('resultFinalPrice').textContent = `RM ${finalPrice.toFixed(2)}`;
    }

    inputs.forEach(input => {
        input.addEventListener('input', calculateCost);
        input.addEventListener('change', calculateCost);
    });

    // Switching material auto-fills the typical spool price for that material.
    document.querySelectorAll('input[name="filamentType"]').forEach(radio => {
        radio.addEventListener('change', () => {
            applyMaterialPreset();
            calculateCost();
        });
    });

    calculateCost();
});


window.printSummary = function() {
    window.print();
}
