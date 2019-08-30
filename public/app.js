/**
 * @returns {string}
 * Pop-out alert when salary is more than required
 * if exceeds validation top, the element is assigned max allowed value
 */
function validateSalary() {
    var salary = document.forms['editForm']['salary'].value;
    if (salary > 1500) {
        alert("Salary cannot be more then 1500$");
        return document.getElementById('salary').value = "1500";
    }
}

