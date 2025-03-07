const form = document.querySelector("form"),
        nextBtn = document.querySelector(".nextBtn"),
        backBtn = document.querySelector(".backBtn"),
        allInput = document.querySelectorAll(".first input");

        nextBtn.addEventListener("click", ()=>{
            allInput.forEach(input =>{
                if(input.value != ""){
                    form.classList.add('secActive');
                }else{
                    form.classList.remove('secActive');
                }
            }) 

        });

        nextBtn.addEventListener("click", ()=>   form.classList.remove('secActive'));




        civilStatusSelect.addEventListener("change", function() {
            if (this.value === "Others") {
                othersInput.style.display = "block";
                othersInput.setAttribute("required", "true");
            } else {
                othersInput.style.display = "none";
                othersInput.removeAttribute("required");
            }
        });


        const lastname = document.getElementById('lastname')
        const firstname = document.getElementById('firstname')
        const middle = document.getElementById('middle')
        const form = document.getElementById('form')
        const errorElement = document.getElementById('error')

        form.addEventListener('submit', (e) => {
            let messages = []
            if(lastname.value === '' || lastname.value == null){
                messages.push(' Last name is required')
            }

            if(firstname.value === '' || firstname.value == null){
                messages.push(' First name is required')
            } 

            if(middle.value === '' || middle.value == null){
                messages.push(' Middle name is required')
            } 

            if(messages.length > 0){
                e.preventDefault()
                errorElement.innerText = messages.join(', ')
            }
        })

        function toggleOthersField() {
            var status = document.getElementById("civil_status").value;
            var othersField = document.getElementById("others_input");
            if (status === "Others") {
                othersField.style.display = "block";
            } else {
                othersField.style.display = "none";
            }
        }
    


const countries = [
    "United States", "Canada", "United Kingdom", "Australia", "Germany", 
    "France", "Japan", "China", "India", "Philippines", "Brazil", "Mexico"
];

// Function to populate the dropdown
function populateCountries() {
    const countryDropdown = document.getElementById("country");

    // Check if the element exists
    if (!countryDropdown) {
        console.error("Dropdown element not found!");
        return;
    }


    countryDropdown.innerHTML = "";


    const defaultOption = document.createElement("option");
    defaultOption.text = "Select a country";
    defaultOption.value = "";
    defaultOption.disabled = true;
    defaultOption.selected = true;
    countryDropdown.appendChild(defaultOption);


    countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country;
        option.text = country;
        countryDropdown.appendChild(option);
    });
}


document.addEventListener("DOMContentLoaded", populateCountries);



const moveButton = document.getElementById('moveButton');

moveButton.addEventListener('click', () => {
  
    const randomX = Math.floor(Math.random() * 200) - 100; 
    const randomY = Math.floor(Math.random() * 200) - 100; 

   
    const currentLeft = moveButton.parentElement.offsetLeft;
    const currentTop = moveButton.parentElement.offsetTop;

    
    moveButton.parentElement.style.left = `${currentLeft + randomX}px`;
    moveButton.parentElement.style.top = `${currentTop + randomY}px`;
});
    


        