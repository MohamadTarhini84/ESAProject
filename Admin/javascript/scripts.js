
//Login Form

const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});



// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

// ---------- CHARTS ----------

// BAR CHART
var barChartOptions = {
  
    series: [{
        name:"Female",
        data: [200, 300, 480, 400, 200, 300, 200, 400, 200, 300, 400, 200]
      }, {
        name:"Male",
        data: [300, 250,200, 250, 400, 200, 300, 400, 200, 150, 360, 400]
      },{
        name:"Children",
        data: [200, 300, 480, 400, 200, 300, 58, 400, 200, 400, 200,250]
      }],
  chart: {
    type: 'bar',
    height: 350,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#246dec",
    "#cc3c43",
    "#367952",
    "#f5b74f",
    "#4f35a1"
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '30%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["January", "February", "March", "April","May", "June","July","August","September","October","November","December"],
  },
  yaxis: {
    title: {
      text: "Count"
    }
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();

// Radial Chart
var radialBaroptions = {
    chart: {
      height: 280,
      type: "radialBar",
    },
    series: [44, 55, 67, 84],
    plotOptions: {
      radialBar: {
        dataLabels: {
          total: {
            show: true,
            label: 'TOTAL'
          }
        }
      }
    },
    colors: [
        "#246dec",
        "#cc3c43",
        "#367952",
        "#f5b74f",
        "#4f35a1"
      ],
    labels: ['Gynecology', 'Allergy and Immunology.', 'Dermatology', 'Diagnostic radiology']
  };

  
  var radialChart = new ApexCharts(document.querySelector("#area-chart"), radialBaroptions);
  radialChart.render();


//Validation 

/*
const valel=document.getElementById("Validate").innerText;
console.log(valel.innerHTML);


switch(valel.innerHTML){
    case "Approved":
      valel.classList.add("Appr");
    case "Declined":
      valel.classList.add("Decl");
}*/


// view Profile & validate 
document.getElementById("prof-btn").addEventListener('click',openProfile)
function openProfile(){
  window.location.href="Drprofile.html";
}