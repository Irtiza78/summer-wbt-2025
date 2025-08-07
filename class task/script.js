function ContactMe() {
    var purpose = prompt(
        "Contact Purpose:\n1. Project Collaboration\n2. Assignment/Thesis\n3. Research Discussion"
    );
    if (!purpose) return;
    purpose = purpose.toLowerCase();

   var output = "Contact Purpose: " + purpose + "\n";

   if (purpose === "project collaboration") {
        var sector = prompt("Please specify the sector or field relevant to the collaboration");
        var area = prompt("What is your specific topic or area of focus within that sector?");
        output += "Collaboration Sector: " + sector + "\nFocus Area: " + area + "\n";
    } 
  else if (purpose === "assignment/thesis") {
        var topic = prompt("What is the main topic or focus area of your thesis or assignment?");
        var supervisor = prompt("Who is guiding or supervising your work?");
        output += "Thesis Topic: " + topic + "\nSupervisor Name: " + supervisor + "\n";
    }
  else if (purpose === "research discussion") {
        const organization = prompt("Which organization or institution are you representing?");
        const topic = prompt("What is the main topic or agenda for the research discussion?");
        output += "Representing Organization: " + organization + "\nTopic: " + topic + "\n";
  }
  else 
  {
    alert(" Invalid purpose provided. Please restart and select a valid option.");
    return;
  }

  var service = prompt("Services:\n1.  Basic Software or Web App\n2. Programming Help (Java / Python / C++)\n3. Basic Cybersecurity Awareness\n4. Report Making Support");

  if (!service) return;
  service = service.toLowerCase();

  var output2 = "Service: " + service + "\n";

  if (service == "programming help (java / python / c++)")

  {
    var techStack = prompt("Which technologies or frameworks do you want to use?");
    output2 += "Technology Stack: " + techStack + "\n";
  }                                                                     
  else if (service == " Programming Help (Java / Python / C++)") 
  {
    var  problemType  = prompt("What type of programming problem do you want help with?");
    output2 += "Problem Type: " +  problemType  + "\n";
  } 
  else if (service == "basic cybersecurity awareness")
  {
    var userGroup = prompt("Who is the training intended for?");
    output2 += "User Group: " + userGroup  + "\n";
  } 
     else if (service == "report making support")
  {
    var reportType = prompt("What type of report do you need help with?");
    output2 += "Report Type: " +  reportType + "\n";
  }   
  else 
  {
    alert("Invalid service choice. Please restart and choose a valid option.");
    return;
  }

  alert("Collected Information:\n\n" + output + output2);
}
ContactMe()