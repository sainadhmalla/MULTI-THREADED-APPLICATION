$(document).ready(function () {
  $("#student_course").change(function () {
    var value = $("#student_course").val();
    if (value == "Diploma In Engineering") {
      $("#student_stream").html(`
                <option value='3-D Animation and Graphics'>3-D Animation and Graphics</option>
                <option value='Administration Services'>Administration Services</option>
                <option value='Advanced   Electronics   and   Communication Engineering'>Advanced   Electronics   and   Communication Engineering</option>
                <option value='Aero Space Engineering'>Aero Space Engineering</option>
                <option value='Aeronautical Engineering'>Aeronautical Engineering</option>
                <option value='Agricultural Engineering'>Agricultural Engineering</option>
                <option value='Agricultural Technology'>Agricultural Technology</option>
                <option value='Agriculture Engineering'>Agriculture Engineering</option>
                <option value='Aircraft Maintenance Engineering'>Aircraft Maintenance Engineering</option>
                <option value='Aircraft Maintenance Engineering (Avionics)'>Aircraft Maintenance Engineering (Avionics)</option>
                <option value='Aircraft Maintenance Engineering (Helicopter and Power Plants)'>Aircraft Maintenance Engineering (Helicopter and Power Plants)</option>
                <option value='Animation and Multimedia Technology'>Animation and Multimedia Technology</option>
                <option value='Apparel Design and Fabric'>Apparel Design and Fabric</option>
                <option value='Apparel Design and Fabrication Technology'>Apparel Design and Fabrication Technology</option>
                <option value='Apparel Design and Fashion Technology'>Apparel Design and Fashion Technology</option>
                <option value='Apparel Manufacture and Design'>Apparel Manufacture and Design</option>
                <option value='Apparel Technology'>Apparel Technology</option>
                <option value='Applied Electronics'>Applied Electronics</option>
                <option value='Applied Electronics and instrumentation Engineering'>Applied Electronics and instrumentation Engineering</option>
                <option value='Applied Videography'>Applied Videography</option>
                <option value='Armament Engineering'>Armament Engineering</option>
                <option value='Armament Engineering (Gun Fitter)'>Armament Engineering (Gun Fitter)</option>
                <option value='Artificer Training (Electrical)'>Artificer Training (Electrical)</option>
                <option value='Artificer Training (Electronics)'>Artificer Training (Electronics)</option>
                <option value='Artificer Training (Mechanical)'>Artificer Training (Mechanical)</option>
                <option value='Audiography and Sound Engineering'>Audiography and Sound Engineering</option>
                <option value='Automation and Robotics'>Automation and Robotics</option>
                <option value='Automobile Engineering'>Automobile Engineering</option>
                <option value='Automobile Engineering (Automobile Fitter)'>Automobile Engineering (Automobile Fitter)</option>
                <option value='Automotive Engineering'>Automotive Engineering</option>
                <option value='Beauty and Hair Dressing'>Beauty and Hair Dressing</option>
                <option value='Beauty Culture and Cosmetology'>Beauty Culture and Cosmetology</option>
                <option value='Biomedical Electronics'>Biomedical Electronics</option>
                <option value='Biomedical Engineering'>Biomedical Engineering</option>
                <option value='Biomedical instrumentation'>Biomedical instrumentation</option>
                <option value='Biotechnology'>Biotechnology</option>
                <option value='CAD CAM'>CAD CAM</option>
                <option value='Campus Wide Network Design and Maintenance'>Campus Wide Network Design and Maintenance</option>
                <option value='Carpet Technology'>Carpet Technology</option>
                <option value='CDDM'>CDDM</option>
                <option value='Cement Technology'>Cement Technology</option>
                <option value='Ceramic Engineering and Technology'>Ceramic Engineering and Technology</option>
                <option value='Ceramic Technology'>Ceramic Technology</option>
                <option value='Ceramics'>Ceramics</option>
                <option value='Ceramics Engineering'>Ceramics Engineering</option>
                <option value='Chemical Engineering'>Chemical Engineering</option>
                <option value='Chemical Engineering (Fertilizer)'>Chemical Engineering (Fertilizer)</option>
                <option value='Chemical Engineering (Oil Technology)'>Chemical Engineering (Oil Technology)</option>
                <option value='Chemical Engineering (Petro Chemical)'>Chemical Engineering (Petro Chemical)</option>
                <option value='Chemical Engineering (Petrochemical)'>Chemical Engineering (Petrochemical)</option>
                <option value='Chemical Engineering (Plastic and Polymer)'>Chemical Engineering (Plastic and Polymer)</option>
                <option value='Chemical Engineering (Sugar Technology)'>Chemical Engineering (Sugar Technology)</option>
                <option value='Chemical Engineering Specialization inPetrochemicals'>Chemical Engineering Specialization inPetrochemicals</option>
                <option value='Chemical Technology'>Chemical Technology</option>
                <option value='Chemical Technology (Paint Technology)'>Chemical Technology (Paint Technology)</option>
                <option value='Chemical   Technology   (Rubber   and   Plastic Technology)'>Chemical   Technology   (Rubber   and   Plastic Technology)</option>
                <option value='Chemical Technology (Rubber/ Plastic)'>Chemical Technology (Rubber/ Plastic)</option>
                <option value='Chemical Technology Fertilizer'>Chemical Technology Fertilizer</option>
                <option value='Cinematography'>Cinematography</option>
                <option value='Civil (Construction)'>Civil (Construction)</option>
                <option value='Civil (Public Health and Environment) Engineering'>Civil (Public Health and Environment) Engineering</option>
                <option value='Civil and Environmental Engineering'>Civil and Environmental Engineering</option>
                <option value='Civil and Rural Engineering'>Civil and Rural Engineering</option>
                <option value='Civil Draftsman'>Civil Draftsman</option>
                <option value='Civil Engineering'>Civil Engineering</option>
                <option value='Civil Engineering (Construction Technology)'>Civil Engineering (Construction Technology)</option>
                <option value='Civil Engineering (Environment and Pollution Control)'>Civil Engineering (Environment and Pollution Control)</option>
                <option value='Civil Engineering (Environmental and Pollution Control)'>Civil Engineering (Environmental and Pollution Control)</option>
                <option value='Civil Engineering (Environmental Engineering)'>Civil Engineering (Environmental Engineering)</option>
                <option value='Civil Engineering (Public Health Engineering)'>Civil Engineering (Public Health Engineering)</option>
                <option value='Civil Engineering (Rural Engineering)'>Civil Engineering (Rural Engineering)</option>
                <option value='Civil Engineering and Planning'>Civil Engineering and Planning</option>
                <option value='Civil  Engineering  Environment  and  Pollution Control'>Civil  Engineering  Environment  and  Pollution Control</option>
                <option value='Civil Environmental Engineering'>Civil Environmental Engineering</option>
                <option value='Civil Technology'>Civil Technology</option>
                <option value='Combat Armament and Weapon Technology'>Combat Armament and Weapon Technology</option>
                <option value='Combat Driving and Maintenance Technology'>Combat Driving and Maintenance Technology</option>
                <option value='Combat Radio and Communication Technology'>Combat Radio and Communication Technology</option>
                <option value='Commercial and Computer Practice'>Commercial and Computer Practice</option>
                <option value='Commercial Practice'>Commercial Practice</option>
                <option value='Commercial Practice (KAN and ENG)'>Commercial Practice (KAN and ENG)</option>
                <option value='Computer  Aided  Costume  Design  and  Dress Making'>Computer  Aided  Costume  Design  and  Dress Making</option>
                <option value='Computer and information Science'>Computer and information Science</option>
                <option value='Computer Application and Business Management'>Computer Application and Business Management</option>
                <option value='Computer Applications'>Computer Applications</option>
                <option value='Computer Engineering'>Computer Engineering</option>
                <option value='Computer Engineering and Application'>Computer Engineering and Application</option>
                <option value='Computer Hardware and Maintenance'>Computer Hardware and Maintenance</option>
                <option value='Computer Hardware and Networking'>Computer Hardware and Networking</option>
                <option value='Computer Hardware Engineering'>Computer Hardware Engineering</option>
                <option value='Computer Hardware Maintenance'>Computer Hardware Maintenance</option>
                <option value='Computer Networking'>Computer Networking</option>
                <option value='Computer Science'>Computer Science</option>
                <option value='Computer Science and Engineering'>Computer Science and Engineering</option>
                <option value='Computer Science and information Technology'>Computer Science and information Technology</option>
                <option value='Computer Science and Technology'>Computer Science and Technology</option>
                <option value='Computer Software Technology'>Computer Software Technology</option>
                <option value='Computer Technology'>Computer Technology</option>
                <option value='Computer Technology and Applications'>Computer Technology and Applications</option>
                <option value='Construction Engineering'>Construction Engineering</option>
                <option value='Construction Technology'>Construction Technology</option>
                <option value='Construction Technology and Management'>Construction Technology and Management</option>
                <option value='Control and instrumentation'>Control and instrumentation</option>
                <option value='Cosmetology and Health'>Cosmetology and Health</option>
                <option value='Costumer Design and Dress Making'>Costumer Design and Dress Making</option>
                <option value='Cyber Forensics and information Security'>Cyber Forensics and information Security</option>
                <option value='Dairy Engineering'>Dairy Engineering</option>
                <option value='Design and Drafting Technology'>Design and Drafting Technology</option>
                <option value='Digital Electronics'>Digital Electronics</option>
                <option value='Digital Electronics and Communication Engineering'>Digital Electronics and Communication Engineering</option>
                <option value='Digital Electronics and Microprocessor'>Digital Electronics and Microprocessor</option>
                <option value='Digital Systems'>Digital Systems</option>
                <option value='Direction Screen Play Writing and TV Production'>Direction Screen Play Writing and TV Production</option>
                <option value='Dress Designing and Garment Manufacturing'>Dress Designing and Garment Manufacturing</option>
                <option value='Drilling Engineering'>Drilling Engineering</option>
                <option value='Drilling Technology'>Drilling Technology</option>
                <option value='ECG Technology'>ECG Technology</option>
                <option value='Electrical and Electronics (Power System)'>Electrical and Electronics (Power System)</option>
                <option value='Electrical and Electronics Engineering'>Electrical and Electronics Engineering</option>
                <option value='Electrical and instrumentation Engineering'>Electrical and instrumentation Engineering</option>
                <option value='Electrical and Mechanical Engineering'>Electrical and Mechanical Engineering</option>
                <option value='Electrical Engineering'>Electrical Engineering</option>
                <option value='Electrical Engineering (Electronics and Power)'>Electrical Engineering (Electronics and Power)</option>
                <option value='Electrical Engineering (Industrial Control)'>Electrical Engineering (Industrial Control)</option>
                <option value='Electrical   Engineering   (Instrumentation   and Control)'>Electrical   Engineering   (Instrumentation   and Control)</option>
                <option value='Electrical Engineering industrial Control'>Electrical Engineering industrial Control</option>
                <option value='Electrical Power System'>Electrical Power System</option>
                <option value='Electrical Power Systems'>Electrical Power Systems</option>
                <option value='Electronic instrumentation and Control Engineering'>Electronic instrumentation and Control Engineering</option>
                <option value='Electronic Science and Engineering'>Electronic Science and Engineering</option>
                <option value='Electronics Engineering'>Electronics Engineering</option>
                <option value='Electronics (Fiber Optics)'>Electronics (Fiber Optics)</option>
                <option value='Electronics (Robotics)'>Electronics (Robotics)</option>
                <option value='Electronics and Avionics'>Electronics and Avionics</option>
                <option value='Electronics and Communication Engineering'>Electronics and Communication Engineering</option>
                <option value='Electronics  and  Communication  Engineering (Industry Integrated)'>Electronics  and  Communication  Engineering (Industry Integrated)</option>
                <option value='Electronics  and  Communication  Engineering (Microwaves)'>Electronics  and  Communication  Engineering (Microwaves)</option>
                <option value='Electronics and Communication Technology'>Electronics and Communication Technology</option>
                <option value='Electronics and Communications Engineering'>Electronics and Communications Engineering</option>
                <option value='Electronics and Computer Engineering'>Electronics and Computer Engineering</option>
                <option value='Electronics and Electrical Engineering'>Electronics and Electrical Engineering</option>
                <option value='Electronics and instrumentation Engineering'>Electronics and instrumentation Engineering</option>
                <option value='Electronics and Production'>Electronics and Production</option>
                <option value='Electronics and Telecommunication'>Electronics and Telecommunication</option>
                <option value='Electronics and Telecommunication Engineering'>Electronics and Telecommunication Engineering</option>
                <option value='Electronics and Tele-Communication Engineering'>Electronics and Tele-Communication Engineering</option>
                <option value='Electronics and Telecommunication Engineering (Radio and System)'>Electronics and Telecommunication Engineering (Radio and System)</option>
                <option value='Electronics and Telecommunication Engineering (Technologynician Electronic Radio)'>Electronics and Telecommunication Engineering (Technologynician Electronic Radio)</option>
                <option value='Electronics and Telecommunications Engineering'>Electronics and Telecommunications Engineering</option>
                <option value='Electronics and Video Engineering'>Electronics and Video Engineering</option>
                <option value='Electronics Communication and instrumentation Engineering'>Electronics Communication and instrumentation Engineering</option>
                <option value='Electronics Engineering'>Electronics Engineering</option>
                <option value='Electronics Engineering (Digital Electronics)'>Electronics Engineering (Digital Electronics)</option>
                <option value='Electronics Engineering (Industry integrated)'>Electronics Engineering (Industry integrated)</option>
                <option value='Electronics Engineering (Micro Electronics)'>Electronics Engineering (Micro Electronics)</option>
                <option value='Electronics Engineering (Specialization in Consumer Electronics)'>Electronics Engineering (Specialization in Consumer Electronics)</option>
                <option value='Electronics   Engineering   Modern   Consumer Electronics'>Electronics   Engineering   Modern   Consumer Electronics</option>
                <option value='Electronics Engineering with Microprocessor'>Electronics Engineering with Microprocessor</option>
                <option value='Electronics instrument and Control'>Electronics instrument and Control</option>
                <option value='Electronics instrumentation and Control Engineering'>Electronics instrumentation and Control Engineering</option>
                <option value='Electronics Production and Maintenance'>Electronics Production and Maintenance</option>
                <option value='Electronics Robotics'>Electronics Robotics</option>
                <option value='Electronics Technology'>Electronics Technology</option>
                <option value='Electronics Tele Communication'>Electronics Tele Communication</option>
                <option value='Embedded Systems'>Embedded Systems</option>
                <option value='Engineering Education'>Engineering Education</option>
                <option value='Environmental Engineering'>Environmental Engineering</option>
                <option value='Fabrication Technology'>Fabrication Technology</option>
                <option value='Fabrication Technology and Erection Engineering'>Fabrication Technology and Erection Engineering</option>
                <option value='Fabrication Technology and Erection Engineering'>Fabrication Technology and Erection Engineering</option>
                <option value='Fashion and Apparel Design'>Fashion and Apparel Design</option>
                <option value='Fashion and Clothing Technology'>Fashion and Clothing Technology</option>
                <option value='Fashion and Design'>Fashion and Design</option>
                <option value='Fashion Designing'>Fashion Designing</option>
                <option value='Fashion Designing and Garment Technology'>Fashion Designing and Garment Technology</option>
                <option value='Fashion Technology'>Fashion Technology</option>
                <option value='Film and Video Editing'>Film and Video Editing</option>
                <option value='Film Editing and TV Production'>Film Editing and TV Production</option>
                <option value='Film Technology (Animation and Visual Effects'>Film Technology (Animation and Visual Effects</option>
                <option value='Film Technology and TV Production (Cinematography)'>Film Technology and TV Production (Cinematography)</option>
                <option value='Film  Technology  and  TV  Production  (Digital intermediate)'>Film  Technology  and  TV  Production  (Digital intermediate)</option>
                <option value='Film   Technology   and   TV   Production   (Film Processing)'>Film   Technology   and   TV   Production   (Film Processing)</option>
                <option value='Film  Technology  and  TV  Production  (Sound Recording and Sound Engineering)'>Film  Technology  and  TV  Production  (Sound Recording and Sound Engineering)</option>
                <option value='Finance Account and Auditing'>Finance Account and Auditing</option>
                <option value='Fire Technology and Safety'>Fire Technology and Safety</option>
                <option value='Fisheries Technology'>Fisheries Technology</option>
                <option value='Food Processing and Preservation'>Food Processing and Preservation</option>
                <option value='Food Processing Technology'>Food Processing Technology</option>
                <option value='Food Technology'>Food Technology</option>
                <option value='Footwear Technology'>Footwear Technology</option>
                <option value='Foundry Technology'>Foundry Technology</option>
                <option value='Garment and Fashion Technology'>Garment and Fashion Technology</option>
                <option value='Garment Design and Fashion Technology'>Garment Design and Fashion Technology</option>
                <option value='Garment Fabrication'>Garment Fabrication</option>
                <option value='Garment Manufacturing Technology'>Garment Manufacturing Technology</option>
                <option value='Garment Technology'>Garment Technology</option>
                <option value='Geographic  information  System  (G.I.S.)  and Global Positioning System'>Geographic  information  System  (G.I.S.)  and Global Positioning System</option>
                <option value='Geoinformatics'>Geoinformatics</option>
                <option value='Glass and Ceramics Engineering'>Glass and Ceramics Engineering</option>
                <option value='Handloom and Textile Technology'>Handloom and Textile Technology</option>
                <option value='Heat Power Engineering'>Heat Power Engineering</option>
                <option value='Home Science'>Home Science</option>
                <option value='Hotel Management and Catering Technology'>Hotel Management and Catering Technology</option>
                <option value='Industrial and Production Engineering'>Industrial and Production Engineering</option>
                <option value='Industrial Electronics'>Industrial Electronics</option>
                <option value='Industrial Production Engineering'>Industrial Production Engineering</option>
                <option value='Information and Communication Technology'>Information and Communication Technology</option>
                <option value='Information Engineering'>Information Engineering</option>
                <option value='Information Science'>Information Science</option>
                <option value='Information Science and Engineering'>Information Science and Engineering</option>
                <option value='Information Science and Technology'>Information Science and Technology</option>
                <option value='Information Technology'>Information Technology</option>
                <option value='Information Technology and Engineering'>Information Technology and Engineering</option>
                <option value='Information Technology Enabled Services and Management'>Information Technology Enabled Services and Management</option>
                <option value='Instrument Technology'>Instrument Technology</option>
                <option value='Instrumentation and Control Engineering'>Instrumentation and Control Engineering</option>
                <option value='Instrumentation and Process Control'>Instrumentation and Process Control</option>
                <option value='Instrumentation Engineering'>Instrumentation Engineering</option>
                <option value='Instrumentation Technology'>Instrumentation Technology</option>
                <option value='Instruments and Medical Equipment'>Instruments and Medical Equipment</option>
                <option value='Interior Decoration'>Interior Decoration</option>
                <option value='Interior Design'>Interior Design</option>
                <option value='Jewellery Design and Manufacture Technology'>Jewellery Design and Manufacture Technology</option>
                <option value='Knitting and Garment Technology'>Knitting and Garment Technology</option>
                <option value='Knitting Technology'>Knitting Technology</option>
                <option value='Leather and Fashion Technology'>Leather and Fashion Technology</option>
                <option value='Leather Goods and Footwear Tech'>Leather Goods and Footwear Tech</option>
                <option value='Leather Technology'>Leather Technology</option>
                <option value='Leather Technology Footwear Computer Aided Shoe Design'>Leather Technology Footwear Computer Aided Shoe Design</option>
                <option value='Leather Technology Tanning'>Leather Technology Tanning</option>
                <option value='Library and information Science'>Library and information Science</option>
                <option value='Machine Engineering'>Machine Engineering</option>
                <option value='Machine Tools and Maintenance Engineering'>Machine Tools and Maintenance Engineering</option>
                <option value='Machine Tools Technology'>Machine Tools Technology</option>
                <option value='Maintenance Engineering'>Maintenance Engineering</option>
                <option value='Manufacturing Engineering'>Manufacturing Engineering</option>
                <option value='Manufacturing Technology'>Manufacturing Technology</option>
                <option value='Marine Engineering'>Marine Engineering</option>
                <option value='Marine Engineering and Systems'>Marine Engineering and Systems</option>
                <option value='Marine   Engineering   and   Systems   (Artificer Training)'>Marine   Engineering   and   Systems   (Artificer Training)</option>
                <option value='Mass Communication'>Mass Communication</option>
                <option value='Material Management'>Material Management</option>
                <option value='Mechanical CAD/CAM'>Mechanical CAD/CAM</option>
                <option value='Mechanical Engineering'>Mechanical Engineering</option>
                <option value='Mechanical Engineering ( Production)'>Mechanical Engineering ( Production)</option>
                <option value='Mechanical Engineering (Automobile)'>Mechanical Engineering (Automobile)</option>
                <option value='Mechanical Engineering (CAD/CAM)'>Mechanical Engineering (CAD/CAM)</option>
                <option value='Mechanical Engineering (Foundry)'>Mechanical Engineering (Foundry)</option>
                <option value='Mechanical Engineering (Industry Integrated)'>Mechanical Engineering (Industry Integrated)</option>
                <option value='Mechanical Engineering (Machine Tool Maintenance and Repairs)'>Mechanical Engineering (Machine Tool Maintenance and Repairs)</option>
                <option value='Mechanical Engineering (Maintenance)'>Mechanical Engineering (Maintenance)</option>
                <option value='Mechanical Engineering (Refrigeration and Air Conditioning)'>Mechanical Engineering (Refrigeration and Air Conditioning)</option>
                <option value='Mechanical Engineering (Repair and Maintenance)'>Mechanical Engineering (Repair and Maintenance)</option>
                <option value='Mechanical Engineering (Tool and Die)'>Mechanical Engineering (Tool and Die)</option>
                <option value='Mechanical Engineering Automobile'>Mechanical Engineering Automobile</option>
                <option value='Mechanical Engineering Power Plant Engineering'>Mechanical Engineering Power Plant Engineering</option>
                <option value='Mechanical Engineering Production'>Mechanical Engineering Production</option>
                <option value='Mechanical Engineering, Refrigeration and Air Conditioning'>Mechanical Engineering, Refrigeration and Air Conditioning</option>
                <option value='Mechanical Engineering (CAD)'>Mechanical Engineering (CAD)</option>
                <option value='Mechanical Engineering Tool Engineering'>Mechanical Engineering Tool Engineering</option>
                <option value='Mechanical Engineering Tube Well Engineering'>Mechanical Engineering Tube Well Engineering</option>
                <option value='Mechanical Welding and Sheet Metal'>Mechanical Welding and Sheet Metal</option>
                <option value='Mechanical Welding and Sheet Metal Engineering'>Mechanical Welding and Sheet Metal Engineering</option>
                <option value='Mechanical Engineering Computer Aided Design/Computer Aided Manufacturing'>Mechanical Engineering Computer Aided Design/Computer Aided Manufacturing</option>
                <option value='Mechatronics'>Mechatronics</option>
                <option value='Medical Electronics Engineering'>Medical Electronics Engineering</option>
                <option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
                <option value='Metallurgical Engineering'>Metallurgical Engineering</option>
                <option value='Metallurgy'>Metallurgy</option>
                <option value='Metallurgy and Material Technology'>Metallurgy and Material Technology</option>
                <option value='Micro Electronics'>Micro Electronics</option>
                <option value='Mine Engineering'>Mine Engineering</option>
                <option value='Mine Surveying'>Mine Surveying</option>
                <option value='Mining and Mine Surveying'>Mining and Mine Surveying</option>
                <option value='Mining Engineering'>Mining Engineering</option>
                <option value='Multimedia Technology'>Multimedia Technology</option>
                <option value='Navy Entry Artificer/ Diploma in Mechanical and Electrical'>Navy Entry Artificer/ Diploma in Mechanical and Electrical</option>
                <option value='Network Engineering'>Network Engineering</option>
                <option value='Office Management and Computer Application'>Office Management and Computer Application</option>
                <option value='Ophthalmic Technology'>Ophthalmic Technology</option>
                <option value='Opto-Electronics Engineering'>Opto-Electronics Engineering</option>
                <option value='Packaging Technology'>Packaging Technology</option>
                <option value='Paint Technology'>Paint Technology</option>
                <option value='Paper Technology'>Paper Technology</option>
                <option value='Paper and Pulp Technology'>Paper and Pulp Technology</option>
                <option value='Petrochemical Engineering'>Petrochemical Engineering</option>
                <option value='Petrochemical Refinery'>Petrochemical Refinery</option>
                <option value='Petrochemical Technology'>Petrochemical Technology</option>
                <option value='Petroleum Engineering'>Petroleum Engineering</option>
                <option value='Petroleum Technology'>Petroleum Technology</option>
                <option value='Photography'>Photography</option>
                <option value='Plastic and Mould Technology'>Plastic and Mould Technology</option>
                <option value='Plastic and Polymer Engineering'>Plastic and Polymer Engineering</option>
                <option value='Plastic Engineering'>Plastic Engineering</option>
                <option value='Plastic Mould Technology'>Plastic Mould Technology</option>
                <option value='Plastic Technology'>Plastic Technology</option>
                <option value='Plastics Engineering'>Plastics Engineering</option>
                <option value='Plastics Mould Technology'>Plastics Mould Technology</option>
                <option value='Plastics Processing and Testing'>Plastics Processing and Testing</option>
                <option value='Plastics Technology'>Plastics Technology</option>
                <option value='Polymer Technology'>Polymer Technology</option>
                <option value='Post Plastic Mould Design'>Post Plastic Mould Design</option>
                <option value='Post Plastic Process and Testing'>Post Plastic Process and Testing</option>
                <option value='Power Electronics'>Power Electronics</option>
                <option value='Power Systems Engineering'>Power Systems Engineering</option>
                <option value='Precision Manufacturing'>Precision Manufacturing</option>
                <option value='Printing and Packing Technology'>Printing and Packing Technology</option>
                <option value='Printing Technology'>Printing Technology</option>
                <option value='Production and Industrial Engineering'>Production and Industrial Engineering</option>
                <option value='Production Engineering'>Production Engineering</option>
                <option value='Production Technology'>Production Technology</option>
                <option value='Pulp Technology'>Pulp Technology</option>
                <option value='Quantity Surveying and Construction Management'>Quantity Surveying and Construction Management</option>
                <option value='Refrigeration and Air Conditioning'>Refrigeration and Air Conditioning</option>
                <option value='Renewable Energy'>Renewable Energy</option>
                <option value='Robotics and Mechatronics'>Robotics and Mechatronics</option>
                <option value='Rubber Technology'>Rubber Technology</option>
                <option value='Saddlery Technology and Export Management'>Saddlery Technology and Export Management</option>
                <option value='Shipbuilding Engineering'>Shipbuilding Engineering</option>
                <option value='Small Arms Engineering'>Small Arms Engineering</option>
                <option value='Sound Recording and Engineering'>Sound Recording and Engineering</option>
                <option value='Sugar Technology'>Sugar Technology</option>
                <option value='Surface Coating Technology'>Surface Coating Technology</option>
                <option value='Survey Engineering'>Survey Engineering</option>
                <option value='Technical Chemistry'>Technical Chemistry</option>
                <option value='Technician X-Ray Technology'>Technician X-Ray Technology</option>
                <option value='Telecommunication Engineering'>Telecommunication Engineering</option>
                <option value='Telecommunication Technology'>Telecommunication Technology</option>
                <option value='Textile Chemistry'>Textile Chemistry</option>
                <option value='Textile Design'>Textile Design</option>
                <option value='Textile Designing'>Textile Designing</option>
                <option value='Textile Designing Printing'>Textile Designing Printing</option>
                <option value='Textile Engineering'>Textile Engineering</option>
                <option value='Textile Manufactures'>Textile Manufactures</option>
                <option value='Textile Manufacturing and Technology'>Textile Manufacturing and Technology</option>
                <option value='Textile Manufacturing Technology'>Textile Manufacturing Technology</option>
                <option value='Textile Marketing and Management'>Textile Marketing and Management</option>
                <option value='Textile Processing'>Textile Processing</option>
                <option value='Textile Processing Technology'>Textile Processing Technology</option>
                <option value='Textile Technology'>Textile Technology</option>
                <option value='Textile Technology (Manmade Fibre)'>Textile Technology (Manmade Fibre)</option>
                <option value='Textile Technology (Textile Design and Weaving)'>Textile Technology (Textile Design and Weaving)</option>
                <option value='Tool and Die Engineering'>Tool and Die Engineering</option>
                <option value='Tool and Die Making'>Tool and Die Making</option>
                <option value='Tool Die and Mould Making'>Tool Die and Mould Making</option>
                <option value='Transportation Engineering'>Transportation Engineering</option>
                <option value='Transportation Engineering and Management'>Transportation Engineering and Management</option>
                <option value='Travel and Tourism'>Travel and Tourism</option>
                <option value='TV and Sound Engineering'>TV and Sound Engineering</option>
                <option value='Water Technology and Health Science'>Water Technology and Health Science</option>
                <option value='Weapons Engineering'>Weapons Engineering</option>
                <option value='Web Designing'>Web Designing</option>
                <option value='Wood and Paper Technology'>Wood and Paper Technology</option>
			`);
    } else if (value == "Post Diploma in Engineering") {
      $("#student_stream").html(`
                <option value='Advanced Die and Mould Making'>Advanced Die and Mould Making</option>
                <option value='Advanced Electrical Power System'>Advanced Electrical Power System</option>
                <option value='Advanced   Electronics   and   Communication'>Advanced   Electronics   and   Communication</option>
                <option value='Engineering'>Engineering</option>
                <option value='Advanced Mechatronics and Industrial'>Advanced Mechatronics and Industrial</option>
                <option value='Automation'>Automation</option>
                <option value='Advanced Refrigeration and Air Conditioning'>Advanced Refrigeration and Air Conditioning</option>
                <option value='Automobile Engineering'>Automobile Engineering</option>
                <option value='Biotechnology Tissue Culture'>Biotechnology Tissue Culture</option>
                <option value='CAD/CAM'>CAD/CAM</option>
                <option value='Computer Aided Design and Manufacture'>Computer Aided Design and Manufacture</option>
                <option value='Computer   Aided   Design   Manufacture   and'>Computer   Aided   Design   Manufacture   and</option>
                <option value='Engineering'>Engineering</option>
                <option value='Computer Applications'>Computer Applications</option>
                <option value='Computer Hardware and Networking'>Computer Hardware and Networking</option>
                <option value='Computer Hardware Maintenance and'>Computer Hardware Maintenance and</option>
                <option value='Networking'>Networking</option>
                <option value='Electrical Engineering'>Electrical Engineering</option>
                <option value='Electronics Communication and'>Electronics Communication and</option>
                <option value='Instrumentation Engineering'>Instrumentation Engineering</option>
                <option value='Environmental Engineering'>Environmental Engineering</option>
                <option value='Fire Technology and Safety'>Fire Technology and Safety</option>
                <option value='Food Technology'>Food Technology</option>
                <option value='Forge Technology'>Forge Technology</option>
                <option value='Foundry Technology'>Foundry Technology</option>
                <option value='Geographic  information  System  (G.I.S.)'>Geographic  information  System  (G.I.S.)  and</option>
                <option value='Global Positioning System'>Global Positioning System</option>
                <option value='Industrial Safety'>Industrial Safety</option>
                <option value='Industrial Safety and Engineering'>Industrial Safety and Engineering</option>
                <option value='Information Technology'>Information Technology</option>
                <option value='Knitting and Garment Technology'>Knitting and Garment Technology</option>
                <option value='Mechanical Engineering'>Mechanical Engineering</option>
                <option value='Medical Electronics'>Medical Electronics</option>
                <option value='Petrochemical Engineering'>Petrochemical Engineering</option>
                <option value='Plant Engineering'>Plant Engineering</option>
                <option value='Plastic Mould Design'>Plastic Mould Design</option>
                <option value='Plastic Mould Design (CAD/CAM)'>Plastic Mould Design (CAD/CAM)</option>
                <option value='Plastic Mould Technology'>Plastic Mould Technology</option>
                <option value='Plastic Technology'>Plastic Technology</option>
                <option value='Plastics Processing and Testing'>Plastics Processing and Testing</option>
                <option value='Polymer Science and Rubber Technology'>Polymer Science and Rubber Technology</option>
                <option value='Post Plastic Mould Design'>Post Plastic Mould Design</option>
                <option value='Post Plastic Process and Testing'>Post Plastic Process and Testing</option>
                <option value='Power Plant Engineering and Energy'>Power Plant Engineering and Energy</option>
                <option value='Management'>Management</option>
                <option value='Production Engineering System Technology'>Production Engineering System Technology</option>
                <option value='Refrigeration and Air Conditioning'>Refrigeration and Air Conditioning</option>
                <option value='Rubber Technology'>Rubber Technology</option>
                <option value='Software Testing'>Software Testing</option>
                <option value='Textile Processing'>Textile Processing</option>
                <option value='Thermal Power Engineering'>Thermal Power Engineering</option>
                <option value='Tool and Die Engineering'>Tool and Die Engineering</option>
                <option value='Tool Design'>Tool Design</option>
                <option value='Town Planning and Architecture'>Town Planning and Architecture</option>
			`);
    } else if (value == "B.Tech. / B.E.") {
      $("#student_stream").html(`
                <option value='3-D Animation and Graphics'>3-D Animation and Graphics</option>
                <option value='Advanced Mechatronics and industrial'>Advanced Mechatronics and industrial</option>
                <option value='Automation'>Automation</option>
                <option value='Aero Space Engineering'>Aero Space Engineering</option>
                <option value='Aeronautical Engineering'>Aeronautical Engineering</option>
                <option value='Aerospace Engineering'>Aerospace Engineering</option>
                <option value='Agricultural Engineering'>Agricultural Engineering</option>
                <option value='Agricultural Technology'>Agricultural Technology</option>
                <option value='Agriculture Engineering'>Agriculture Engineering</option>
                <option value='Aircraft Maintenance Engineering'>Aircraft Maintenance Engineering</option>
                <option value='Airline Management'>Airline Management</option>
                <option value='Apparel and Production Management'>Apparel and Production Management</option>
                <option value='Applied Electronics and Communications'>Applied Electronics and Communications</option>
                <option value='Applied Electronics and instrumentation'>Applied Electronics and instrumentation</option>
                <option value='Engineering'>Engineering</option>
                <option value='Architectural Assistantship'>Architectural Assistantship</option>
                <option value='Architecture and Interior Decoration'>Architecture and Interior Decoration</option>
                <option value='Artificial Intelligence and Data Science'>Artificial Intelligence and Data Science</option>
                <option value='Automation and Robotics'>Automation and Robotics</option>
                <option value='Automation Engineering'>Automation Engineering</option>
                <option value='Automobile Engineering'>Automobile Engineering</option>
                <option value='Automobile Maintenance Engineering'>Automobile Maintenance Engineering</option>
                <option value='Automotive Technology'>Automotive Technology</option>
                <option value='Biochemical Engineering'>Biochemical Engineering</option>
                <option value='Bioelectronics Engineering'>Bioelectronics Engineering</option>
                <option value='Bioinformatics'>Bioinformatics</option>
                <option value='Biomedical Engineering'>Biomedical Engineering</option>
                <option value='Biomedical and Robotic Engineering'>Biomedical and Robotic Engineering</option>
                <option value='Biomedical instrumentation'>Biomedical instrumentation</option>
                <option value='Biotechnology'>Biotechnology</option>
                <option value='Biotechnology and Biochemical Engineering'>Biotechnology and Biochemical Engineering</option>
                <option value='Building and Construction Technology'>Building and Construction Technology</option>
                <option value='Carpet and Textile Technology'>Carpet and Textile Technology</option>
                <option value='Cement and Ceramic Technology'>Cement and Ceramic Technology</option>
                <option value='Ceramic Engineering and Technology'>Ceramic Engineering and Technology</option>
                <option value='Ceramic Technology'>Ceramic Technology</option>
                <option value='Ceramics Engineering'>Ceramics Engineering</option>
                <option value='Chemical Engineering (Desalination and Water'>Chemical Engineering (Desalination and Water</option>
                <option value='Treatment)'>Treatment)</option>
                <option value='Chemical and Biochemical Engineering'>Chemical and Biochemical Engineering</option>
                <option value='Chemical and Electro Chemical Engineering'>Chemical and Electro Chemical Engineering</option>
                <option value='Chemical Engineering'>Chemical Engineering</option>
                <option value='Chemical Engineering (Plastic and Polymer)'>Chemical Engineering (Plastic and Polymer)</option>
                <option value='Chemical Technology'>Chemical Technology</option>
                <option value='Civil and Environmental Engineering'>Civil and Environmental Engineering</option>
                <option value='Civil and infrastructure Engineering'>Civil and infrastructure Engineering</option>
                <option value='Civil and Rural Engineering'>Civil and Rural Engineering</option>
                <option value='Civil and Water Management Engineering'>Civil and Water Management Engineering</option>
                <option value='Civil Engineering'>Civil Engineering</option>
                <option value='Civil Engineering with Computer Application'>Civil Engineering with Computer Application</option>
                <option value='Civil Engineering (Construction Technology)'>Civil Engineering (Construction Technology)</option>
                <option value='Civil Engineering (Environmental Engineering)'>Civil Engineering (Environmental Engineering)</option>
                <option value='Civil Engineering and Planning'>Civil Engineering and Planning</option>
                <option value='Civil  Engineering  Environment  and  Pollution'>Civil  Engineering  Environment  and  Pollution</option>
                <option value='Control'>Control</option>
                <option value='Civil Environmental Engineering'>Civil Environmental Engineering</option>
                <option value='Civil Technology'>Civil Technology</option>
                <option value='Computer and Communication Engineering'>Computer and Communication Engineering</option>
                <option value='Computer Engineering'>Computer Engineering</option>
                <option value='Computer Engineering (Software Engineering)'>Computer Engineering (Software Engineering)</option>
                <option value='Computer Engineering and Application'>Computer Engineering and Application</option>
                <option value='Computer Networking'>Computer Networking</option>
                <option value='Computer Science and Applied Mathematics'>Computer Science and Applied Mathematics</option>
                <option value='Computer Science and Biosciences'>Computer Science and Biosciences</option>
                <option value='Computer Science and Business Systems'>Computer Science and Business Systems</option>
                <option value='Computer   Science   and   Engineering   (Cyber'>Computer   Science   and   Engineering   (Cyber</option>
                <option value='Security)'>Security)</option>
                <option value='Computer Science and Design'>Computer Science and Design</option>
                <option value='Computer Science and Engineering'>Computer Science and Engineering</option>
                <option value='Computer  Science and  Engineering (Artificial'>Computer  Science and  Engineering (Artificial</option>
                <option value='Intelligence )'>Intelligence )</option>
                <option value='Computer  Science and  Engineering (Artificial'>Computer  Science and  Engineering (Artificial</option>
                <option value='Intelligence and Machine Learning)'>Intelligence and Machine Learning)</option>
                <option value='Computer   Science   and   Engineering   (Data'>Computer   Science   and   Engineering   (Data</option>
                <option value='Science)'>Science)</option>
                <option value='Computer Science and Engineering (Internet of Things  and  Cyber  Security  Including  Block Chain Technology)'>Computer Science and Engineering (Internet of Things  and  Cyber  Security  Including  Block Chain Technology)</option>
                <option value='Computer Science and Engineering (IoT)'>Computer Science and Engineering (IoT)</option>
                <option value='Computer Science and Engineering (Networks)'>Computer Science and Engineering (Networks)</option>
                <option value='Computer Science and Engineering and Business'>Computer Science and Engineering and Business</option>
                <option value='Systems'>Systems</option>
                <option value='Computer Science and information Technology'>Computer Science and information Technology</option>
                <option value='Computer Science and Medical Engineering'>Computer Science and Medical Engineering</option>
                <option value='Computer Science and Social Sciences'>Computer Science and Social Sciences</option>
                <option value='Computer Science and Systems Engineering'>Computer Science and Systems Engineering</option>
                <option value='Computer Science and Technology'>Computer Science and Technology</option>
                <option value='Computer Technology'>Computer Technology</option>
                <option value='Computing in Multimedia'>Computing in Multimedia</option>
                <option value='Computing in Software'>Computing in Software</option>
                <option value='Construction Engineering'>Construction Engineering</option>
                <option value='Construction Engineering and Management'>Construction Engineering and Management</option>
                <option value='Construction Technology'>Construction Technology</option>
                <option value='Construction Technology and Management'>Construction Technology and Management</option>
                <option value='Cyber Physical Systems'>Cyber Physical Systems</option>
                <option value='Dairy Engineering'>Dairy Engineering</option>
                <option value='Dairy Technology'>Dairy Technology</option>
                <option value='Digital Techniques For Design and Planning'>Digital Techniques For Design and Planning</option>
                <option value='Dyestuff Technology'>Dyestuff Technology</option>
                <option value='Electrical and Computer Engineering'>Electrical and Computer Engineering</option>
                <option value='Electrical and Electronics (Power System)'>Electrical and Electronics (Power System)</option>
                <option value='Electrical and Electronics Engineering'>Electrical and Electronics Engineering</option>
                <option value='Electrical and instrumentation Engineering'>Electrical and instrumentation Engineering</option>
                <option value='Electrical and Power Engineering'>Electrical and Power Engineering</option>
                <option value='Electrical Engineering'>Electrical Engineering</option>
                <option value='Electrical Engineering (Electronics and Power)'>Electrical Engineering (Electronics and Power)</option>
                <option value='Electrical instrumentation and Control'>Electrical instrumentation and Control</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electrical Power Engineering'>Electrical Power Engineering</option>
                <option value='Electrical, Electronics and Power Engineering'>Electrical, Electronics and Power Engineering</option>
                <option value='Electronic Engineering'>Electronic Engineering</option>
                <option value='Electronic instrumentation and Control'>Electronic instrumentation and Control</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronic Science and Engineering'>Electronic Science and Engineering</option>
                <option value='Electronics and Biomedical Engineering'>Electronics and Biomedical Engineering</option>
                <option value='Electronics and Communication'>Electronics and Communication</option>
                <option value='(Communication System Engineering)'>(Communication System Engineering)</option>
                <option value='Electronics and Communication Engineering'>Electronics and Communication Engineering</option>
                <option value='Electronics  and  Communication  Engineering'>Electronics  and  Communication  Engineering</option>
                <option value='(Bio-Medical Engineering)'>(Bio-Medical Engineering)</option>
                <option value='Electronics  and  Communication  Engineering'>Electronics  and  Communication  Engineering</option>
                <option value='(Industry Integrated)'>(Industry Integrated)</option>
                <option value='Electronics  and  Communication  Engineering'>Electronics  and  Communication  Engineering</option>
                <option value='(Microwaves)'>(Microwaves)</option>
                <option value='Electronics and Communication Technology'>Electronics and Communication Technology</option>
                <option value='Electronics and Computer Engineering'>Electronics and Computer Engineering</option>
                <option value='Electronics and Computer Science'>Electronics and Computer Science</option>
                <option value='Electronics and Control Systems'>Electronics and Control Systems</option>
                <option value='Electronics and Electrical Engineering'>Electronics and Electrical Engineering</option>
                <option value='Electronics and Instrumentation Engineering'>Electronics and Instrumentation Engineering</option>
                <option value='Electronics and Power Engineering'>Electronics and Power Engineering</option>
                <option value='Electronics and Telecommunication'>Electronics and Telecommunication</option>
                <option value='Electronics and Telecommunication Engineering'>Electronics and Telecommunication Engineering</option>
                <option value='Electronics and Tele-Communication'>Electronics and Tele-Communication</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronics and Telecommunication Engineering'>Electronics and Telecommunication Engineering</option>
                <option value='(Technologynician Electronic Radio)'>(Technologynician Electronic Radio)</option>
                <option value='Electronics and Telecommunications'>Electronics and Telecommunications</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronics and Telematics Engineering'>Electronics and Telematics Engineering</option>
                <option value='Electronics Communication and'>Electronics Communication and</option>
                <option value='Instrumentation Engineering'>Instrumentation Engineering</option>
                <option value='Electronics Design Technology'>Electronics Design Technology</option>
                <option value='Electronics Engineering'>Electronics Engineering</option>
                <option value='Electronics Instrument and Control'>Electronics Instrument and Control</option>
                <option value='Electronics Instrumentation and Control'>Electronics Instrumentation and Control</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronics System Engineering'>Electronics System Engineering</option>
                <option value='Electronics Technology'>Electronics Technology</option>
                <option value='Energy and Environmental Management'>Energy and Environmental Management</option>
                <option value='Energy Engineering'>Energy Engineering</option>
                <option value='Environment Engineering'>Environment Engineering</option>
                <option value='Environmental Engineering'>Environmental Engineering</option>
                <option value='Environmental Science and Engineering'>Environmental Science and Engineering</option>
                <option value='Environmental Science and Technology'>Environmental Science and Technology</option>
                <option value='Facilities and Services Planning'>Facilities and Services Planning</option>
                <option value='Fashion and Apparel Engineering'>Fashion and Apparel Engineering</option>
                <option value='Fashion Technology'>Fashion Technology</option>
                <option value='Fibres and Textiles Processing Technology'>Fibres and Textiles Processing Technology</option>
                <option value='Fire Engineering'>Fire Engineering</option>
                <option value='Fire Technology and Safety'>Fire Technology and Safety</option>
                <option value='Fisheries Engineering'>Fisheries Engineering</option>
                <option value='Food Engineering and Technology'>Food Engineering and Technology</option>
                <option value='Food Processing and Preservation'>Food Processing and Preservation</option>
                <option value='Food Processing Technology'>Food Processing Technology</option>
                <option value='Food Technology'>Food Technology</option>
                <option value='Food Technology and Management'>Food Technology and Management</option>
                <option value='Footwear Technology'>Footwear Technology</option>
                <option value='Geo informatics'>Geo informatics</option>
                <option value='Handloom and Textile Technology'>Handloom and Textile Technology</option>
                <option value='Industrial and Production Engineering'>Industrial and Production Engineering</option>
                <option value='Industrial Biotechnology'>Industrial Biotechnology</option>
                <option value='Industrial Engineering'>Industrial Engineering</option>
                <option value='Industrial Engineering and Management'>Industrial Engineering and Management</option>
                <option value='Industrial Production Engineering'>Industrial Production Engineering</option>
                <option value='Information and Communication Technology'>Information and Communication Technology</option>
                <option value='Information Engineering'>Information Engineering</option>
                <option value='Information Science and Engineering'>Information Science and Engineering</option>
                <option value='Information Science and Technology'>Information Science and Technology</option>
                <option value='Information Technology'>Information Technology</option>
                <option value='Information Technology and Engineering'>Information Technology and Engineering</option>
                <option value='Instrument Technology'>Instrument Technology</option>
                <option value='Instrumentation and Control Engineering'>Instrumentation and Control Engineering</option>
                <option value='Instrumentation and Electronics'>Instrumentation and Electronics</option>
                <option value='Instrumentation Engineering'>Instrumentation Engineering</option>
                <option value='Instrumentation Technology'>Instrumentation Technology</option>
                <option value='Jute and Fibre Technology'>Jute and Fibre Technology</option>
                <option value='Leather Technology'>Leather Technology</option>
                <option value='Man Made Fibre Technology'>Man Made Fibre Technology</option>
                <option value='Man-Made Textile Technology'>Man-Made Textile Technology</option>
                <option value='Manufacturing Engineering'>Manufacturing Engineering</option>
                <option value='Manufacturing Engineering and Technology'>Manufacturing Engineering and Technology</option>
                <option value='Manufacturing Process and Automation'>Manufacturing Process and Automation</option>
                <option value='Engineering'>Engineering</option>
                <option value='Manufacturing Science and Engineering'>Manufacturing Science and Engineering</option>
                <option value='Manufacturing Technology'>Manufacturing Technology</option>
                <option value='Marine Engineering'>Marine Engineering</option>
                <option value='Marine Technology'>Marine Technology</option>
                <option value='Material Science and Technology'>Material Science and Technology</option>
                <option value='Mechanical and Automation Engineering'>Mechanical and Automation Engineering</option>
                <option value='Mechanical   and   Mechatronics   Engineering'>Mechanical   and   Mechatronics   Engineering</option>
                <option value='(Additive Manufacturing)'>(Additive Manufacturing)</option>
                <option value='Mechanical and Smart Manufacturing'>Mechanical and Smart Manufacturing</option>
                <option value='Mechanical Engineering'>Mechanical Engineering</option>
                <option value='Mechanical Engineering (Automobile)'>Mechanical Engineering (Automobile)</option>
                <option value='Mechanical Engineering (Industry Integrated)'>Mechanical Engineering (Industry Integrated)</option>
                <option value='Mechanical Engineering (Manufacturing'>Mechanical Engineering (Manufacturing</option>
                <option value='Engineering)'>Engineering)</option>
                <option value='Mechanical Engineering (Production)'>Mechanical Engineering (Production)</option>
                <option value='Mechanical Engineering (Welding Technology)'>Mechanical Engineering (Welding Technology)</option>
                <option value='Mechanical Engineering Automobile'>Mechanical Engineering Automobile</option>
                <option value='Mechanical Engineering Design'>Mechanical Engineering Design</option>
                <option value='Mechatronics Engineering'>Mechatronics Engineering</option>
                <option value='Medical Electronics Engineering'>Medical Electronics Engineering</option>
                <option value='Medical Lab Technology'>Medical Lab Technology</option>
                <option value='Metallurgical and Materials Engineering'>Metallurgical and Materials Engineering</option>
                <option value='Metallurgical Engineering'>Metallurgical Engineering</option>
                <option value='Metallurgy'>Metallurgy</option>
                <option value='Metallurgy and Material Technology'>Metallurgy and Material Technology</option>
                <option value='Mine Engineering'>Mine Engineering</option>
                <option value='Mining Engineering'>Mining Engineering</option>
                <option value='Nano Science and Technology'>Nano Science and Technology</option>
                <option value='Nano Technology'>Nano Technology</option>
                <option value='Naval Architecture and Ship Building'>Naval Architecture and Ship Building</option>
                <option value='Engineering'>Engineering</option>
                <option value='Nuclear Science and Technology'>Nuclear Science and Technology</option>
                <option value='Oil and Paint Technology'>Oil and Paint Technology</option>
                <option value='Oil Technology'>Oil Technology</option>
                <option value='Oils, Oleochemicals and Surfactants Technology'>Oils, Oleochemicals and Surfactants Technology</option>
                <option value='Optics and Optoelectronics'>Optics and Optoelectronics</option>
                <option value='Packaging Technology'>Packaging Technology</option>
                <option value='Paint Technology'>Paint Technology</option>
                <option value='Petrochem and Petroleum Refinery Engineering'>Petrochem and Petroleum Refinery Engineering</option>
                <option value='Petrochem Engineering'>Petrochem Engineering</option>
                <option value='Petrochemical Engineering'>Petrochemical Engineering</option>
                <option value='Petrochemical Technology'>Petrochemical Technology</option>
                <option value='Petroleum Engineering'>Petroleum Engineering</option>
                <option value='Petroleum Technology'>Petroleum Technology</option>
                <option value='Pharmaceutical Engineering'>Pharmaceutical Engineering</option>
                <option value='Pharmaceuticals and Fine Chemical Technology'>Pharmaceuticals and Fine Chemical Technology</option>
                <option value='Pharmaceuticals Chemistry and Technology'>Pharmaceuticals Chemistry and Technology</option>
                <option value='Plastic and Polymer Engineering'>Plastic and Polymer Engineering</option>
                <option value='Plastic Technology'>Plastic Technology</option>
                <option value='Plastics Engineering'>Plastics Engineering</option>
                <option value='Polymer Engineering'>Polymer Engineering</option>
                <option value='Polymer Engineering and Technology'>Polymer Engineering and Technology</option>
                <option value='Polymer Science and Chemical Technology'>Polymer Science and Chemical Technology</option>
                <option value='Polymer Science and Technology'>Polymer Science and Technology</option>
                <option value='Polymer Technology'>Polymer Technology</option>
                <option value='Poultry Technology'>Poultry Technology</option>
                <option value='Power Electronics'>Power Electronics</option>
                <option value='Power Electronics and instrumentation'>Power Electronics and instrumentation</option>
                <option value='Engineering'>Engineering</option>
                <option value='Power Electronics Engineering'>Power Electronics Engineering</option>
                <option value='Power Engineering'>Power Engineering</option>
                <option value='Precision Manufacturing'>Precision Manufacturing</option>
                <option value='Printing and Packing Technology'>Printing and Packing Technology</option>
                <option value='Printing Technology'>Printing Technology</option>
                <option value='Printing, Graphics and Packaging'>Printing, Graphics and Packaging</option>
                <option value='Production and industrial Engineering'>Production and industrial Engineering</option>
                <option value='Production Engineering'>Production Engineering</option>
                <option value='Pulp Technology'>Pulp Technology</option>
                <option value='Radio Physics and Electronics'>Radio Physics and Electronics</option>
                <option value='Robotics and Automation'>Robotics and Automation</option>
                <option value='Rubber and Plastics Technology'>Rubber and Plastics Technology</option>
                <option value='Rubber Technology'>Rubber Technology</option>
                <option value='Safety and Fire Engineering'>Safety and Fire Engineering</option>
                <option value='Shipbuilding Engineering'>Shipbuilding Engineering</option>
                <option value='Silk Technology'>Silk Technology</option>
                <option value='Software Engineering'>Software Engineering</option>
                <option value='Structural Engineering'>Structural Engineering</option>
                <option value='Surface Coating Technology'>Surface Coating Technology</option>
                <option value='Telecommunication Engineering'>Telecommunication Engineering</option>
                <option value='Textile Chemistry'>Textile Chemistry</option>
                <option value='Textile Engineering'>Textile Engineering</option>
                <option value='Textile Plant Engineering'>Textile Plant Engineering</option>
                <option value='Textile Processing'>Textile Processing</option>
                <option value='Textile Technology'>Textile Technology</option>
			`);
    } else if (value == "PG Diploma in Engineering") {
      $("#student_stream").html(`
                <option value='Cement Technology'>Cement Technology</option>
                <option value='Chemical Engineering (Sugar Technology)'>Chemical Engineering (Sugar Technology)</option>
                <option value='Computer Applications'>Computer Applications</option>
                <option value='Computer Engineering and Application'>Computer Engineering and Application</option>
                <option value='Computer Hardware and Networking'>Computer Hardware and Networking</option>
                <option value='Food, Drug and Cosmetics'>Food, Drug and Cosmetics</option>
                <option value='Industrial Engineering'>Industrial Engineering</option>
                <option value='Mechanical Engineering (Production)'>Mechanical Engineering (Production)</option>
                <option value='Networking'>Networking</option>
                <option value='Plastics Processing and Testing'>Plastics Processing and Testing</option>
                <option value='Sugar Technology'>Sugar Technology</option>
			`);
    } else if (value == "M. Tech. / M.E") {
      $("#student_stream").html(`
                <option value='Advanced Communication and information'>Advanced Communication and information</option>
                <option value='System'>System</option>
                <option value='Advanced Computer Aided Design'>Advanced Computer Aided Design</option>
                <option value='Advanced Design and Manufacturing'>Advanced Design and Manufacturing</option>
                <option value='Advanced Electrical Power System'>Advanced Electrical Power System</option>
                <option value='Advanced Electronics'>Advanced Electronics</option>
                <option value='Advanced   Electronics   and   Communication'>Advanced   Electronics   and   Communication</option>
                <option value='Engineering'>Engineering</option>
                <option value='Advanced   Manufacturing   and   Mechanical'>Advanced   Manufacturing   and   Mechanical</option>
                <option value='Systems Design'>Systems Design</option>
                <option value='Advanced Manufacturing Systems'>Advanced Manufacturing Systems</option>
                <option value='Advanced Manufacturing Technology'>Advanced Manufacturing Technology</option>
                <option value='Advanced Materials Technology'>Advanced Materials Technology</option>
                <option value='Advanced Production Systems'>Advanced Production Systems</option>
                <option value='Aero Dynamic Engineering'>Aero Dynamic Engineering</option>
                <option value='Aero Space Engineering'>Aero Space Engineering</option>
                <option value='Aerospace Technology'>Aerospace Technology</option>
                <option value='Aeronautical Engineering'>Aeronautical Engineering</option>
                <option value='Agricultural Engineering'>Agricultural Engineering</option>
                <option value='Agricultural Science and Technology'>Agricultural Science and Technology</option>
                <option value='Air Armament'>Air Armament</option>
                <option value='Apparel Technology'>Apparel Technology</option>
                <option value='Applied Electronics'>Applied Electronics</option>
                <option value='Applied Electronics and Communication System'>Applied Electronics and Communication System</option>
                <option value='Applied Electronics and Communications'>Applied Electronics and Communications</option>
                <option value='Applied Electronics and instrumentation'>Applied Electronics and instrumentation</option>
                <option value='Engineering'>Engineering</option>
                <option value='Applied instrumentation'>Applied instrumentation</option>
                <option value='Applied Mechanics'>Applied Mechanics</option>
                <option value='Armament Engineering (Gun Fitter)'>Armament Engineering (Gun Fitter)</option>
                <option value='Artificial intelligence'>Artificial intelligence</option>
                <option value='Artificial Intelligence and Data Science'>Artificial Intelligence and Data Science</option>
                <option value='Atmospheric Science'>Atmospheric Science</option>
                <option value='Automated Manufacturing Systems'>Automated Manufacturing Systems</option>
                <option value='Automation'>Automation</option>
                <option value='Automation and Control Power Systems'>Automation and Control Power Systems</option>
                <option value='Automation and Robotics'>Automation and Robotics</option>
                <option value='Automobile Engineering'>Automobile Engineering</option>
                <option value='Automobile Technology'>Automobile Technology</option>
                <option value='Automotive Electronics'>Automotive Electronics</option>
                <option value='Automotive Engineering'>Automotive Engineering</option>
                <option value='Automotive Systems'>Automotive Systems</option>
                <option value='Automotive Technology'>Automotive Technology</option>
                <option value='Avionics'>Avionics</option>
                <option value='Aviation Technology'>Aviation Technology</option>
                <option value='Bio Electronics'>Bio Electronics</option>
                <option value='Biochemical Engineering'>Biochemical Engineering</option>
                <option value='Biochemical Engineering and Biotechnology'>Biochemical Engineering and Biotechnology</option>
                <option value='Bioinformatics'>Bioinformatics</option>
                <option value='Biomedical Electronics'>Biomedical Electronics</option>
                <option value='Biomedical Engineering'>Biomedical Engineering</option>
                <option value='Biomedical instrumentation'>Biomedical instrumentation</option>
                <option value='Biomedical Instrumentation and Signal'>Biomedical Instrumentation and Signal</option>
                <option value='Processing'>Processing</option>
                <option value='Biomedical Signal Processing and'>Biomedical Signal Processing and</option>
                <option value='instrumentation'>instrumentation</option>
                <option value='Biometrics and Cyber Security'>Biometrics and Cyber Security</option>
                <option value='Bioprocess Engineering'>Bioprocess Engineering</option>
                <option value='Bioprocess Technology'>Bioprocess Technology</option>
                <option value='Biotechnology'>Biotechnology</option>
                <option value='Biotechnology and Biochemical Engineering'>Biotechnology and Biochemical Engineering</option>
                <option value='Building Construction Technology'>Building Construction Technology</option>
                <option value='CAD/CAM'>CAD/CAM</option>
                <option value='CAD/CAM Engineering'>CAD/CAM Engineering</option>
                <option value='CAD/CAM/CAE'>CAD/CAM/CAE</option>
                <option value='CAD/ CAM Robotics'>CAD/ CAM Robotics</option>
                <option value='Ceramic Engineering and Technology'>Ceramic Engineering and Technology</option>
                <option value='Ceramics Engineering'>Ceramics Engineering</option>
                <option value='Chemical and Biotechnology'>Chemical and Biotechnology</option>
                <option value='Civil and Environmental Technology'>Civil and Environmental Technology</option>
                <option value='Chemical Engineering'>Chemical Engineering</option>
                <option value='Chemical Processing in Textiles'>Chemical Processing in Textiles</option>
                <option value='Chemical Reaction Engineering'>Chemical Reaction Engineering</option>
                <option value='Chemical Science and Technology'>Chemical Science and Technology</option>
                <option value='Chemical Technology'>Chemical Technology</option>
                <option value='Chemical Technology (Rubber/ Plastic)'>Chemical Technology (Rubber/ Plastic)</option>
                <option value='Civil (Construction Engineering and'>Civil (Construction Engineering and</option>
                <option value='Management)'>Management)</option>
                <option value='Civil (Public Health and Environment)'>Civil (Public Health and Environment)</option>
                <option value='Engineering'>Engineering</option>
                <option value='Civil (Structural Engineering)'>Civil (Structural Engineering)</option>
                <option value='Civil (Water Resource Engineering)'>Civil (Water Resource Engineering)</option>
                <option value='Civil Engineering'>Civil Engineering</option>
                <option value='Civil Engineering (Computer Aided Structural'>Civil Engineering (Computer Aided Structural</option>
                <option value='Engineering'>Engineering</option>
                <option value='Civil Engineering (Construction Technology)'>Civil Engineering (Construction Technology)</option>
                <option value='Civil Engineering (Environmental and Pollution'>Civil Engineering (Environmental and Pollution</option>
                <option value='Control)'>Control)</option>
                <option value='Civil Engineering (Environmental Engineering)'>Civil Engineering (Environmental Engineering)</option>
                <option value='Civil Engineering (Transportation Engineering)'>Civil Engineering (Transportation Engineering)</option>
                <option value='Civil Engineering (Water Management)'>Civil Engineering (Water Management)</option>
                <option value='Civil Environmental Engineering'>Civil Environmental Engineering</option>
                <option value='Cloud Computing'>Cloud Computing</option>
                <option value='Combat Equipment Technology'>Combat Equipment Technology</option>
                <option value='Combat Vehicles (Mechanical Engineering)'>Combat Vehicles (Mechanical Engineering)</option>
                <option value='Communication and Information Systems'>Communication and Information Systems</option>
                <option value='Communication and Networking'>Communication and Networking</option>
                <option value='Communication and Signal Process'>Communication and Signal Process</option>
                <option value='Communication Control and Networking'>Communication Control and Networking</option>
                <option value='Communication Engineering'>Communication Engineering</option>
                <option value='Communication Engineering and Signal'>Communication Engineering and Signal</option>
                <option value='Processing'>Processing</option>
                <option value='Communication Networks'>Communication Networks</option>
                <option value='Communication Systems'>Communication Systems</option>
                <option value='Communication Technology and Management'>Communication Technology and Management</option>
                <option value='Communications Engineering'>Communications Engineering</option>
                <option value='Computational Analysis in Mechanical Science'>Computational Analysis in Mechanical Science</option>
                <option value='Computational Biology'>Computational Biology</option>
                <option value='Computational  Engineering  and  Networking'>Computational  Engineering  and  Networking</option>
                <option value='(Data Science)'>(Data Science)</option>
                <option value='Computational Mechanics'>Computational Mechanics</option>
                <option value='Computational Mechanics (Mechanical'>Computational Mechanics (Mechanical</option>
                <option value='Engineering)'>Engineering)</option>
                <option value='Computer Aided Analysis and Design'>Computer Aided Analysis and Design</option>
                <option value='Computer Aided Design'>Computer Aided Design</option>
                <option value='Computer Aided Design and Computer Aided'>Computer Aided Design and Computer Aided</option>
                <option value='Manufacture'>Manufacture</option>
                <option value='Computer Aided Design and Manufacture'>Computer Aided Design and Manufacture</option>
                <option value='Computer   Aided   Design   Manufacture   and'>Computer   Aided   Design   Manufacture   and</option>
                <option value='Automation'>Automation</option>
                <option value='Computer   Aided   Design   Manufacture   and'>Computer   Aided   Design   Manufacture   and</option>
                <option value='Engineering'>Engineering</option>
                <option value='Computer Aided Design of Structures'>Computer Aided Design of Structures</option>
                <option value='Computer Aided Process Design'>Computer Aided Process Design</option>
                <option value='Computer Aided Structural Analysis and Design'>Computer Aided Structural Analysis and Design</option>
                <option value='Computer Aided Structural Engineering'>Computer Aided Structural Engineering</option>
                <option value='Computer and Communication'>Computer and Communication</option>
                <option value='Computer and Communication Engineering'>Computer and Communication Engineering</option>
                <option value='Computer and information Science'>Computer and information Science</option>
                <option value='Computer and Information Technology'>Computer and Information Technology</option>
                <option value='Computer Applications'>Computer Applications</option>
                <option value='Computer Applications in Industrial Drives'>Computer Applications in Industrial Drives</option>
                <option value='Computer Cognition and Technology'>Computer Cognition and Technology</option>
                <option value='Computer Engineering'>Computer Engineering</option>
                <option value='Computer Engineering (Software Engineering)'>Computer Engineering (Software Engineering)</option>
                <option value='Computer Engineering and Application'>Computer Engineering and Application</option>
                <option value='Computer Engineering and Networking'>Computer Engineering and Networking</option>
                <option value='Computer Hardware and Networking'>Computer Hardware and Networking</option>
                <option value='Computer integrated Manufacturing'>Computer integrated Manufacturing</option>
                <option value='Computer Network Engineering'>Computer Network Engineering</option>
                <option value='Computer Networking'>Computer Networking</option>
                <option value='Computer Networking and Engineering'>Computer Networking and Engineering</option>
                <option value='Computer Networks'>Computer Networks</option>
                <option value='Computer Networks and information Security'>Computer Networks and information Security</option>
                <option value='Computer Networks and internet Security'>Computer Networks and internet Security</option>
                <option value='Computer Science'>Computer Science</option>
                <option value='Computer Science and Engineering'>Computer Science and Engineering</option>
                <option value='Computer  Science and  Engineering (Artificial'>Computer  Science and  Engineering (Artificial</option>
                <option value='Intelligence and Machine Learning)'>Intelligence and Machine Learning)</option>
                <option value='Computer   Science   and   Engineering   (Cyber'>Computer   Science   and   Engineering   (Cyber</option>
                <option value='Security)'>Security)</option>
                <option value='Computer Science and Engineering (Networks)'>Computer Science and Engineering (Networks)</option>
                <option value='Computer Science and Engineering (Operations'>Computer Science and Engineering (Operations</option>
                <option value='Research)'>Research)</option>
                <option value='Computer Science and Information Security'>Computer Science and Information Security</option>
                <option value='Computer Science and Information System'>Computer Science and Information System</option>
                <option value='Computer Science and Information Technology'>Computer Science and Information Technology</option>
                <option value='Computer Science and Systems Engineering'>Computer Science and Systems Engineering</option>
                <option value='Computer Science and Technology'>Computer Science and Technology</option>
                <option value='Computer Systems and Technology'>Computer Systems and Technology</option>
                <option value='Computer   Science   Engineering   (Big   Data'>Computer   Science   Engineering   (Big   Data</option>
                <option value='Analytics)'>Analytics)</option>
                <option value='Computer Technology'>Computer Technology</option>
                <option value='Computer Technology and Applications'>Computer Technology and Applications</option>
                <option value='Computer Vision and Image Processing'>Computer Vision and Image Processing</option>
                <option value='Computing in Computing'>Computing in Computing</option>
                <option value='Construction and Project Management'>Construction and Project Management</option>
                <option value='Construction Engineering'>Construction Engineering</option>
                <option value='Construction Engineering and Management'>Construction Engineering and Management</option>
                <option value='Construction Management'>Construction Management</option>
                <option value='Construction Planning and Management'>Construction Planning and Management</option>
                <option value='Construction Project Management'>Construction Project Management</option>
                <option value='Construction Technology'>Construction Technology</option>
                <option value='Construction Technology and Management'>Construction Technology and Management</option>
                <option value='Control and Instrument'>Control and Instrument</option>
                <option value='Control and Instrumentation'>Control and Instrumentation</option>
                <option value='Control Engineering'>Control Engineering</option>
                <option value='Control System Engineering'>Control System Engineering</option>
                <option value='Control Systems'>Control Systems</option>
                <option value='Cryogenic Engineering'>Cryogenic Engineering</option>
                <option value='Cyber Forensics'>Cyber Forensics</option>
                <option value='Cyber Forensics and information Security'>Cyber Forensics and information Security</option>
                <option value='Cyber Security'>Cyber Security</option>
                <option value='Cybersecurity Systems and Networks'>Cybersecurity Systems and Networks</option>
                <option value='Data Engineering'>Data Engineering</option>
                <option value='Data Sciences'>Data Sciences</option>
                <option value='Design and Production'>Design and Production</option>
                <option value='Design and Thermal Engineering'>Design and Thermal Engineering</option>
                <option value='Design Engineering'>Design Engineering</option>
                <option value='Design for Manufacturing'>Design for Manufacturing</option>
                <option value='Design of Mechanical Equipment'>Design of Mechanical Equipment</option>
                <option value='Design of Mechanical Systems'>Design of Mechanical Systems</option>
                <option value='Digital Communication'>Digital Communication</option>
                <option value='Digital Communication Engineering'>Digital Communication Engineering</option>
                <option value='Digital Communications'>Digital Communications</option>
                <option value='Digital Communications and Networking'>Digital Communications and Networking</option>
                <option value='Digital Electronics'>Digital Electronics</option>
                <option value='Digital Electronics and Communication'>Digital Electronics and Communication</option>
                <option value='Digital Electronics and Communication'>Digital Electronics and Communication</option>
                <option value='Engineering'>Engineering</option>
                <option value='Digital Electronics and Communication Systems'>Digital Electronics and Communication Systems</option>
                <option value='Digital Electronics Engineering'>Digital Electronics Engineering</option>
                <option value='Digital Image Processing'>Digital Image Processing</option>
                <option value='Digital Instrumentation'>Digital Instrumentation</option>
                <option value='Digital Signal Processing'>Digital Signal Processing</option>
                <option value='Digital Systems'>Digital Systems</option>
                <option value='Digital Systems and Communications'>Digital Systems and Communications</option>
                <option value='Engineering'>Engineering</option>
                <option value='Digital Systems and Computer Electronics'>Digital Systems and Computer Electronics</option>
                <option value='Digital Techniques and instrumentation'>Digital Techniques and instrumentation</option>
                <option value='Distributed and Mobile Computing'>Distributed and Mobile Computing</option>
                <option value='Distributed Computing Systems'>Distributed Computing Systems</option>
                <option value='Distributed Systems'>Distributed Systems</option>
                <option value='Drugs and Pharmaceuticals'>Drugs and Pharmaceuticals</option>
                <option value='Dyestuff Technology'>Dyestuff Technology</option>
                <option value='Earthquake Engineering'>Earthquake Engineering</option>
                <option value='E-Learning Technologies'>E-Learning Technologies</option>
                <option value='Electric Power System'>Electric Power System</option>
                <option value='Electrical and Electronics (Power System)'>Electrical and Electronics (Power System)</option>
                <option value='Electrical and Electronics Engineering'>Electrical and Electronics Engineering</option>
                <option value='Electrical and Mechanical Engineering'>Electrical and Mechanical Engineering</option>
                <option value='Electrical and Power Engineering'>Electrical and Power Engineering</option>
                <option value='Electrical Devices and Power Systems'>Electrical Devices and Power Systems</option>
                <option value='Electrical Drives and Control'>Electrical Drives and Control</option>
                <option value='Electrical Energy Systems'>Electrical Energy Systems</option>
                <option value='Electrical Engineering'>Electrical Engineering</option>
                <option value='Electrical Engineering (Electronics and Power)'>Electrical Engineering (Electronics and Power)</option>
                <option value='Electrical   Engineering   (Instrumentation   and'>Electrical   Engineering   (Instrumentation   and</option>
                <option value='Control)'>Control)</option>
                <option value='Electrical instrumentation and Control'>Electrical instrumentation and Control</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electrical Machines'>Electrical Machines</option>
                <option value='Electrical Machines and Drives'>Electrical Machines and Drives</option>
                <option value='Electrical Power Engineering'>Electrical Power Engineering</option>
                <option value='Electrical Power System'>Electrical Power System</option>
                <option value='Electronic Circuits and System Design'>Electronic Circuits and System Design</option>
                <option value='Electronic Engineering'>Electronic Engineering</option>
                <option value='Electronic instrumentation and Control'>Electronic instrumentation and Control</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronics and Communication'>Electronics and Communication</option>
                <option value='(Communication System Engineering)'>(Communication System Engineering)</option>
                <option value='Electronics and Communication (Signal'>Electronics and Communication (Signal</option>
                <option value='Processing and Communication)'>Processing and Communication)</option>
                <option value='Electronics and Communication (Signal'>Electronics and Communication (Signal</option>
                <option value='Processing and VLSI Technology)'>Processing and VLSI Technology)</option>
                <option value='Electronics and Communication (VLSI Design)'>Electronics and Communication (VLSI Design)</option>
                <option value='Electronics  and  Communication  (VLSI  System'>Electronics  and  Communication  (VLSI  System</option>
                <option value='Design)'>Design)</option>
                <option value='Electronics and Communication (Wireless'>Electronics and Communication (Wireless</option>
                <option value='Communication Systems and Networks)'>Communication Systems and Networks)</option>
                <option value='Electronics and Communication (Wireless'>Electronics and Communication (Wireless</option>
                <option value='Communication Technology)'>Communication Technology)</option>
                <option value='Electronics and Communication Engineering'>Electronics and Communication Engineering</option>
                <option value='Electronics  and  Communication  Engineering'>Electronics  and  Communication  Engineering</option>
                <option value='(Industry integrated)'>(Industry integrated)</option>
                <option value='Electronics and Electrical Technology'>Electronics and Electrical Technology</option>
                <option value='Electronics and instrumentation Engineering'>Electronics and instrumentation Engineering</option>
                <option value='Electronics and Tele-Communication'>Electronics and Tele-Communication</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronics and Telecommunication Engineering'>Electronics and Telecommunication Engineering</option>
                <option value='(Radio and System)'>(Radio and System)</option>
                <option value='Electronics and Telecommunication Engineering'>Electronics and Telecommunication Engineering</option>
                <option value='(Technologynician Electronic Radio)'>(Technologynician Electronic Radio)</option>
                <option value='Electronics and Telecommunications'>Electronics and Telecommunications</option>
                <option value='Engineering'>Engineering</option>
                <option value='Electronics Communication and'>Electronics Communication and</option>
                <option value='instrumentation Engineering'>instrumentation Engineering</option>
                <option value='Electronics Design and Technology'>Electronics Design and Technology</option>
                <option value='Electronics Design Technology'>Electronics Design Technology</option>
                <option value='Electronics Engineering'>Electronics Engineering</option>
                <option value='Electronics Product Design and Technology'>Electronics Product Design and Technology</option>
                <option value='Electronics Systems and Communication'>Electronics Systems and Communication</option>
                <option value='Electronics Technology'>Electronics Technology</option>
                <option value='Electronics Tele Communication'>Electronics Tele Communication</option>
                <option value='Embedded and Real Time Systems'>Embedded and Real Time Systems</option>
                <option value='Embedded Control and Automation'>Embedded Control and Automation</option>
                <option value='Embedded Control Systems'>Embedded Control Systems</option>
                <option value='Embedded System and Computing'>Embedded System and Computing</option>
                <option value='Embedded System and VLSI'>Embedded System and VLSI</option>
                <option value='Embedded System and VLSI Design'>Embedded System and VLSI Design</option>
                <option value='Embedded Systems'>Embedded Systems</option>
                <option value='Embedded Systems Technologies'>Embedded Systems Technologies</option>
                <option value='Energetic Materials and Polymers'>Energetic Materials and Polymers</option>
                <option value='Energy and Environmental Engineering'>Energy and Environmental Engineering</option>
                <option value='Energy and Environmental Management'>Energy and Environmental Management</option>
                <option value='Energy Engineering'>Energy Engineering</option>
                <option value='Energy Management'>Energy Management</option>
                <option value='Energy Science and Technology'>Energy Science and Technology</option>
                <option value='Energy Systems'>Energy Systems</option>
                <option value='Energy Systems Analysis and Design'>Energy Systems Analysis and Design</option>
                <option value='Energy Systems and Management'>Energy Systems and Management</option>
                <option value='Energy Systems Engineering'>Energy Systems Engineering</option>
                <option value='Energy Technology'>Energy Technology</option>
                <option value='Energy Technology and Management'>Energy Technology and Management</option>
                <option value='Engineering Analysis and Design'>Engineering Analysis and Design</option>
                <option value='Engineering and Management'>Engineering and Management</option>
                <option value='Engineering Design'>Engineering Design</option>
                <option value='Engineering Education'>Engineering Education</option>
                <option value='Engineering Statistics'>Engineering Statistics</option>
                <option value='Environment and Water Resource Engineering'>Environment and Water Resource Engineering</option>
                <option value='Environment Engineering'>Environment Engineering</option>
                <option value='Environmental Biotechnology'>Environmental Biotechnology</option>
                <option value='Environmental Engineering'>Environmental Engineering</option>
                <option value='Environmental Engineering and Management'>Environmental Engineering and Management</option>
                <option value='Environmental Management'>Environmental Management</option>
                <option value='Environmental Science and Engineering'>Environmental Science and Engineering</option>
                <option value='Environmental Science and Technology'>Environmental Science and Technology</option>
                <option value='E-Security'>E-Security</option>
                <option value='Farm Machinery'>Farm Machinery</option>
                <option value='Fashion and Apparel Engineering'>Fashion and Apparel Engineering</option>
                <option value='Fashion Technology'>Fashion Technology</option>
                <option value='Financial Engineering'>Financial Engineering</option>
                <option value='Food Biotechnology'>Food Biotechnology</option>
                <option value='Food Engineering and Technology'>Food Engineering and Technology</option>
                <option value='Food Plant Operations Management'>Food Plant Operations Management</option>
                <option value='Food Process Engineering and Management'>Food Process Engineering and Management</option>
                <option value='Food Processing Technology'>Food Processing Technology</option>
                <option value='Food Safety and Quality Management'>Food Safety and Quality Management</option>
                <option value='Food Supply Chain Management'>Food Supply Chain Management</option>
                <option value='Food Technology'>Food Technology</option>
                <option value='Food Technology and Management'>Food Technology and Management</option>
                <option value='Footwear Science and Engineering'>Footwear Science and Engineering</option>
                <option value='Foundation Engineering'>Foundation Engineering</option>
                <option value='Foundry and Forge Technology'>Foundry and Forge Technology</option>
                <option value='Fracture Mechanics'>Fracture Mechanics</option>
                <option value='Fuel and Combustion'>Fuel and Combustion</option>
                <option value='Future Studies and Planning'>Future Studies and Planning</option>
                <option value='Gas Turbine Technology'>Gas Turbine Technology</option>
                <option value='Geo Informatics'>Geo Informatics</option>
                <option value='Geoinformatics and Earth Observation'>Geoinformatics and Earth Observation</option>
                <option value='Geo Informatics and Surveying Technology'>Geo Informatics and Surveying Technology</option>
                <option value='Geomachines and Structures'>Geomachines and Structures</option>
                <option value='Geomechanics and Structures'>Geomechanics and Structures</option>
                <option value='Geotechnical and Geoenvironmental Energy'>Geotechnical and Geoenvironmental Energy</option>
                <option value='Geotechnical Earthquake Engineering'>Geotechnical Earthquake Engineering</option>
                <option value='Geotechnical Engineering'>Geotechnical Engineering</option>
                <option value='Geotechnology'>Geotechnology</option>
                <option value='Green Energy Technology'>Green Energy Technology</option>
                <option value='Green Technology'>Green Technology</option>
                <option value='Guidance and Navigation Control'>Guidance and Navigation Control</option>
                <option value='Guided Missiles'>Guided Missiles</option>
                <option value='Health Science and Water Engineering'>Health Science and Water Engineering</option>
                <option value='Heat and Power'>Heat and Power</option>
                <option value='Heat Power and Thermal Engineering'>Heat Power and Thermal Engineering</option>
                <option value='Heat Power Engineering'>Heat Power Engineering</option>
                <option value='Heat Ventilation and Air Conditioning'>Heat Ventilation and Air Conditioning</option>
                <option value='High Voltage and Power Systems Engineering'>High Voltage and Power Systems Engineering</option>
                <option value='High Voltage Engineering'>High Voltage Engineering</option>
                <option value='Highway Engineering'>Highway Engineering</option>
                <option value='Highway Technology'>Highway Technology</option>
                <option value='Hill Area Development Engineering'>Hill Area Development Engineering</option>
                <option value='Hydraulics and Flood Control'>Hydraulics and Flood Control</option>
                <option value='Hydraulics Engineering'>Hydraulics Engineering</option>
                <option value='Hydrology and Water Resources Engineering'>Hydrology and Water Resources Engineering</option>
                <option value='Industrial Intelligent Systems'>Industrial Intelligent Systems</option>
                <option value='I.T. (Courseware Engineering)'>I.T. (Courseware Engineering)</option>
                <option value='Illumination Engineering'>Illumination Engineering</option>
                <option value='Illumination Technology and Design'>Illumination Technology and Design</option>
                <option value='Image Processing'>Image Processing</option>
                <option value='Industrial and Production Engineering'>Industrial and Production Engineering</option>
                <option value='Industrial Automation and RF Engineering'>Industrial Automation and RF Engineering</option>
                <option value='Industrial Automation and Robotics'>Industrial Automation and Robotics</option>
                <option value='Industrial Biotechnology'>Industrial Biotechnology</option>
                <option value='Industrial Catalysis'>Industrial Catalysis</option>
                <option value='Industrial Design'>Industrial Design</option>
                <option value='Industrial Drives and Control'>Industrial Drives and Control</option>
                <option value='Industrial Electronics'>Industrial Electronics</option>
                <option value='Industrial Engineering'>Industrial Engineering</option>
                <option value='Industrial Engineering and Management'>Industrial Engineering and Management</option>
                <option value='Industrial Instrumentation and Control'>Industrial Instrumentation and Control</option>
                <option value='Industrial Mathematics'>Industrial Mathematics</option>
                <option value='Industrial Metallurgy'>Industrial Metallurgy</option>
                <option value='Industrial Pollution Control'>Industrial Pollution Control</option>
                <option value='Industrial Power Control and Drives'>Industrial Power Control and Drives</option>
                <option value='Industrial Refrigeration and Cryogenics'>Industrial Refrigeration and Cryogenics</option>
                <option value='Industrial Safety'>Industrial Safety</option>
                <option value='Industrial Safety and Engineering'>Industrial Safety and Engineering</option>
                <option value='Industrial Structures'>Industrial Structures</option>
                <option value='Industrial System and Drives'>Industrial System and Drives</option>
                <option value='Industrial Systems Engineering'>Industrial Systems Engineering</option>
                <option value='Information and Communication Technology'>Information and Communication Technology</option>
                <option value='Information Engineering'>Information Engineering</option>
                <option value='Information Science and Technology'>Information Science and Technology</option>
                <option value='Information Security'>Information Security</option>
                <option value='Information Security Management'>Information Security Management</option>
                <option value='Information Systems'>Information Systems</option>
                <option value='Information Technology'>Information Technology</option>
                <option value='Information Technology (Artificial Intelligence'>Information Technology (Artificial Intelligence</option>
                <option value='and Robotics)'>and Robotics)</option>
                <option value='Information Technology (Information and'>Information Technology (Information and</option>
                <option value='Cyber Warfare)'>Cyber Warfare)</option>
                <option value='Information Technology (Multimedia)'>Information Technology (Multimedia)</option>
                <option value='Information Technology and Engineering'>Information Technology and Engineering</option>
                <option value='Infrastructure Engineering'>Infrastructure Engineering</option>
                <option value='Infrastructure Engineering and Management'>Infrastructure Engineering and Management</option>
                <option value='Infrastructure Engineering and Technology'>Infrastructure Engineering and Technology</option>
                <option value='Infrastructure Management'>Infrastructure Management</option>
                <option value='Instrumentation and Control (Applied'>Instrumentation and Control (Applied</option>
                <option value='Instrumentation)'>Instrumentation)</option>
                <option value='Instrumentation and Control Engineering'>Instrumentation and Control Engineering</option>
                <option value='Instrumentation and Electronics'>Instrumentation and Electronics</option>
                <option value='Instrumentation Engineering'>Instrumentation Engineering</option>
                <option value='Instrumentation Technology'>Instrumentation Technology</option>
                <option value='Integrated Circuits Technology'>Integrated Circuits Technology</option>
                <option value='Integrated Power Systems'>Integrated Power Systems</option>
                <option value='Integrated Water Resources Management'>Integrated Water Resources Management</option>
                <option value='Intelligent Systems'>Intelligent Systems</option>
                <option value='Internal Combustion and Automobiles'>Internal Combustion and Automobiles</option>
                <option value='Internal Combustion Engineering'>Internal Combustion Engineering</option>
                <option value='Internal Combustion Engines and Turbo'>Internal Combustion Engines and Turbo</option>
                <option value='Machinery'>Machinery</option>
                <option value='Internet of Things'>Internet of Things</option>
                <option value='Iot and Sensor Systems'>Iot and Sensor Systems</option>
                <option value='Irrigation and Drainage Engineering'>Irrigation and Drainage Engineering</option>
                <option value='Irrigation Engineering'>Irrigation Engineering</option>
                <option value='Irrigation Water Management'>Irrigation Water Management</option>
                <option value='Laser and Electro Optics'>Laser and Electro Optics</option>
                <option value='Laser Technology'>Laser Technology</option>
                <option value='Lean Manufacturing Engineering'>Lean Manufacturing Engineering</option>
                <option value='Leather Technology'>Leather Technology</option>
                <option value='Machine Design'>Machine Design</option>
                <option value='Machine Design and Robotics'>Machine Design and Robotics</option>
                <option value='Maintenance Engineering'>Maintenance Engineering</option>
                <option value='Man-Made Textile Technology'>Man-Made Textile Technology</option>
                <option value='Manufacturing and Automation'>Manufacturing and Automation</option>
                <option value='Manufacturing Engineering'>Manufacturing Engineering</option>
                <option value='Manufacturing Engineering and Automation'>Manufacturing Engineering and Automation</option>
                <option value='Manufacturing Engineering and Management'>Manufacturing Engineering and Management</option>
                <option value='Manufacturing Engineering and Technology'>Manufacturing Engineering and Technology</option>
                <option value='Manufacturing Process'>Manufacturing Process</option>
                <option value='Manufacturing Process and Automation'>Manufacturing Process and Automation</option>
                <option value='Engineering'>Engineering</option>
                <option value='Manufacturing Science and Engineering'>Manufacturing Science and Engineering</option>
                <option value='Manufacturing Systems and Management'>Manufacturing Systems and Management</option>
                <option value='Manufacturing Systems Engineering'>Manufacturing Systems Engineering</option>
                <option value='Manufacturing Technology'>Manufacturing Technology</option>
                <option value='Manufacturing Technology and Automation'>Manufacturing Technology and Automation</option>
                <option value='Marine Engineering'>Marine Engineering</option>
                <option value='Marine Technology'>Marine Technology</option>
                <option value='Material Engineering'>Material Engineering</option>
                <option value='Material Engineering (Nanotechnology)'>Material Engineering (Nanotechnology)</option>
                <option value='Material Handling'>Material Handling</option>
                <option value='Material Science and Chemical Technology'>Material Science and Chemical Technology</option>
                <option value='Material Science and Engineering'>Material Science and Engineering</option>
                <option value='Material Science and Technology'>Material Science and Technology</option>
                <option value='Materials Engineering'>Materials Engineering</option>
                <option value='Measurement and Control'>Measurement and Control</option>
                <option value='Mechanical (Computer Aided Design,'>Mechanical (Computer Aided Design,</option>
                <option value='Manufacture and Engineering)'>Manufacture and Engineering)</option>
                <option value='Mechanical (Computer integrated'>Mechanical (Computer integrated</option>
                <option value='Manufacturing)'>Manufacturing)</option>
                <option value='Mechanical   (I.C.   Engine   and   Automobile'>Mechanical   (I.C.   Engine   and   Automobile</option>
                <option value='Engineering)'>Engineering)</option>
                <option value='Mechanical and Automation Engineering'>Mechanical and Automation Engineering</option>
                <option value='Mechanical and Materials Technology'>Mechanical and Materials Technology</option>
                <option value='Mechanical Engineering'>Mechanical Engineering</option>
                <option value='Mechanical Engineering (CAD/CAM)'>Mechanical Engineering (CAD/CAM)</option>
                <option value='Mechanical Engineering (Cyber Physical'>Mechanical Engineering (Cyber Physical</option>
                <option value='Systems)'>Systems)</option>
                <option value='Mechanical  Engineering  (Energy  System  and'>Mechanical  Engineering  (Energy  System  and</option>
                <option value='Management)'>Management)</option>
                <option value='Mechanical Engineering (Industry Integrated)'>Mechanical Engineering (Industry Integrated)</option>
                <option value='Mechanical Engineering (Manufacturing'>Mechanical Engineering (Manufacturing</option>
                <option value='Technology)'>Technology)</option>
                <option value='Mechanical Engineering (Production)'>Mechanical Engineering (Production)</option>
                <option value='Mechanical Engineering (Thermal Engineering)'>Mechanical Engineering (Thermal Engineering)</option>
                <option value='Mechanical Engineering Automobile'>Mechanical Engineering Automobile</option>
                <option value='Mechanical Engineering Design'>Mechanical Engineering Design</option>
                <option value='Mechanical Engineering Production'>Mechanical Engineering Production</option>
                <option value='Mechanical Engineering (CAD)'>Mechanical Engineering (CAD)</option>
                <option value='Mechanical  Engineering-Product  Design  and'>Mechanical  Engineering-Product  Design  and</option>
                <option value='Development'>Development</option>
                <option value='Mechanical- Product Life Cycle Management'>Mechanical- Product Life Cycle Management</option>
                <option value='Mechanical System Design'>Mechanical System Design</option>
                <option value='Mechanical Welding and Sheet Metal'>Mechanical Welding and Sheet Metal</option>
                <option value='Engineering'>Engineering</option>
                <option value='Mechanical-Manufacturing Engineering'>Mechanical-Manufacturing Engineering</option>
                <option value='Mechatronics'>Mechatronics</option>
                <option value='Medical Electronics'>Medical Electronics</option>
                <option value='Metallurgical and Materials Engineering'>Metallurgical and Materials Engineering</option>
                <option value='Metallurgical Engineering'>Metallurgical Engineering</option>
                <option value='Metallurgy'>Metallurgy</option>
                <option value='Metallurgy and Material Technology'>Metallurgy and Material Technology</option>
                <option value='Micro and Nano Electronics'>Micro and Nano Electronics</option>
                <option value='Micro Electronics'>Micro Electronics</option>
                <option value='Micro Electronics and Control Systems'>Micro Electronics and Control Systems</option>
                <option value='Micro Electronics and VLSI Design'>Micro Electronics and VLSI Design</option>
                <option value='Micro Electronics and VLSI Technology'>Micro Electronics and VLSI Technology</option>
                <option value='Micro Electronics Engineering'>Micro Electronics Engineering</option>
                <option value='Microelectronics and VLSI Design'>Microelectronics and VLSI Design</option>
                <option value='Microwave and Communication Engineering'>Microwave and Communication Engineering</option>
                <option value='Microwave and Millimeter Engineering'>Microwave and Millimeter Engineering</option>
                <option value='Microwave and Optical Communication'>Microwave and Optical Communication</option>
                <option value='Microwave and Radar Engineering'>Microwave and Radar Engineering</option>
                <option value='Microwave and TV Engineering'>Microwave and TV Engineering</option>
                <option value='Microwave Engineering'>Microwave Engineering</option>
                <option value='Microwaves'>Microwaves</option>
                <option value='Mining Engineering'>Mining Engineering</option>
                <option value='Mobile Communication and Network'>Mobile Communication and Network</option>
                <option value='Technology'>Technology</option>
                <option value='Mobile Computing'>Mobile Computing</option>
                <option value='Mobile Computing Technology'>Mobile Computing Technology</option>
                <option value='Mobile Technology'>Mobile Technology</option>
                <option value='Modeling and Simulation'>Modeling and Simulation</option>
                <option value='Modern Communication Engineering'>Modern Communication Engineering</option>
                <option value='Multimedia and Software Engineering'>Multimedia and Software Engineering</option>
                <option value='Multimedia Technology'>Multimedia Technology</option>
                <option value='Nano Science and Technology'>Nano Science and Technology</option>
                <option value='Nano Technology'>Nano Technology</option>
                <option value='Network Engineering'>Network Engineering</option>
                <option value='Network infrastructure Management'>Network infrastructure Management</option>
                <option value='Network Security and Management'>Network Security and Management</option>
                <option value='Networking'>Networking</option>
                <option value='Networking and internet Engineering'>Networking and internet Engineering</option>
                <option value='Neural Networks'>Neural Networks</option>
                <option value='New Material Process and Technology'>New Material Process and Technology</option>
                <option value='Non-Sewered Sanitation'>Non-Sewered Sanitation</option>
                <option value='Nuclear Engineering'>Nuclear Engineering</option>
                <option value='Nuclear Science and Technology'>Nuclear Science and Technology</option>
                <option value='Ocean Technology'>Ocean Technology</option>
                <option value='Oil Technology'>Oil Technology</option>
                <option value='Oils, Oleochemicals and Surfactants Technology'>Oils, Oleochemicals and Surfactants Technology</option>
                <option value='Optical Engineering'>Optical Engineering</option>
                <option value='Optics and Optoelectronics'>Optics and Optoelectronics</option>
                <option value='Opto Electronics and Communication Systems'>Opto Electronics and Communication Systems</option>
                <option value='Optoelectronics and Communication'>Optoelectronics and Communication</option>
                <option value='Optoelectronics and Laser Technology'>Optoelectronics and Laser Technology</option>
                <option value='Opto-Electronics Engineering'>Opto-Electronics Engineering</option>
                <option value='Optoelectronics -Optical Communication'>Optoelectronics -Optical Communication</option>
                <option value='Packaging Technology'>Packaging Technology</option>
                <option value='Paint Technology'>Paint Technology</option>
                <option value='Parallel Distributed Systems'>Parallel Distributed Systems</option>
                <option value='Perfumery and Flavour Technology'>Perfumery and Flavour Technology</option>
                <option value='Pervasive Computing Technology'>Pervasive Computing Technology</option>
                <option value='Petrochem and Petroleum Refinery Engineering'>Petrochem and Petroleum Refinery Engineering</option>
                <option value='Petrochemical Engineering'>Petrochemical Engineering</option>
                <option value='Petrochemical Technology'>Petrochemical Technology</option>
                <option value='Petroleum Engineering'>Petroleum Engineering</option>
                <option value='Petroleum Refining and Petrochemicals'>Petroleum Refining and Petrochemicals</option>
                <option value='Petroleum Technology'>Petroleum Technology</option>
                <option value='Pharmaceutical Biotechnology'>Pharmaceutical Biotechnology</option>
                <option value='Pharmaceuticals and Fine Chemical Technology'>Pharmaceuticals and Fine Chemical Technology</option>
                <option value='Pharmaceuticals Chemistry and Technology'>Pharmaceuticals Chemistry and Technology</option>
                <option value='Physical Metallurgy'>Physical Metallurgy</option>
                <option value='Plant Design'>Plant Design</option>
                <option value='Plastic Engineering'>Plastic Engineering</option>
                <option value='Plastics Engineering'>Plastics Engineering</option>
                <option value='Plastics Processing and Testing'>Plastics Processing and Testing</option>
                <option value='Plastics Technology'>Plastics Technology</option>
                <option value='Polymer Engineering'>Polymer Engineering</option>
                <option value='Polymer Nanotechnology'>Polymer Nanotechnology</option>
                <option value='Polymer Science and Engineering'>Polymer Science and Engineering</option>
                <option value='Polymer Science and Technology'>Polymer Science and Technology</option>
                <option value='Polymer Technology'>Polymer Technology</option>
                <option value='Power and Energy Engineering'>Power and Energy Engineering</option>
                <option value='Power and Energy System'>Power and Energy System</option>
                <option value='Power and Industrial Drives'>Power and Industrial Drives</option>
                <option value='Power Control and Drives'>Power Control and Drives</option>
                <option value='Power Electronics'>Power Electronics</option>
                <option value='Power Electronics and Control'>Power Electronics and Control</option>
                <option value='Power Electronics and Drives'>Power Electronics and Drives</option>
                <option value='Power   Electronics   and   Drives   in  Electrical'>Power   Electronics   and   Drives   in  Electrical</option>
                <option value='Engineering'>Engineering</option>
                <option value='Power Electronics and Electrical Drives'>Power Electronics and Electrical Drives</option>
                <option value='Power Electronics and Machine Drives'>Power Electronics and Machine Drives</option>
                <option value='Power Electronics and Power Systems'>Power Electronics and Power Systems</option>
                <option value='Power Electronics and Systems'>Power Electronics and Systems</option>
                <option value='Power Electronics Engineering'>Power Electronics Engineering</option>
                <option value='Power Engineering'>Power Engineering</option>
                <option value='Power Engineering and Energy Systems'>Power Engineering and Energy Systems</option>
                <option value='Power Plant Engineering and Energy'>Power Plant Engineering and Energy</option>
                <option value='Management'>Management</option>
                <option value='Power System and Control'>Power System and Control</option>
                <option value='Power System and Control Automation'>Power System and Control Automation</option>
                <option value='Power System Control and Automation'>Power System Control and Automation</option>
                <option value='Power System with Emphasis H. V. Engineering'>Power System with Emphasis H. V. Engineering</option>
                <option value='Power Systems'>Power Systems</option>
                <option value='Power Systems and Automation'>Power Systems and Automation</option>
                <option value='Power Systems and Power Electronics'>Power Systems and Power Electronics</option>
                <option value='Power Systems and Renewable Energy'>Power Systems and Renewable Energy</option>
                <option value='Power Systems Control and Automation'>Power Systems Control and Automation</option>
                <option value='Engineering'>Engineering</option>
                <option value='Power Systems Engineering'>Power Systems Engineering</option>
                <option value='Pre Stressed Concrete'>Pre Stressed Concrete</option>
                <option value='Printing Engineering and Graphics'>Printing Engineering and Graphics</option>
                <option value='Communication'>Communication</option>
                <option value='Printing Technology'>Printing Technology</option>
                <option value='Process and Food Engineering'>Process and Food Engineering</option>
                <option value='Process Control'>Process Control</option>
                <option value='Process Control instrumentation'>Process Control instrumentation</option>
                <option value='Process Dynamics and Control'>Process Dynamics and Control</option>
                <option value='Process instrumentation'>Process instrumentation</option>
                <option value='Process Metallurgy'>Process Metallurgy</option>
                <option value='Product Design'>Product Design</option>
                <option value='Product Design and Commerce'>Product Design and Commerce</option>
                <option value='Product Design and Development'>Product Design and Development</option>
                <option value='Product Design and Manufacturing'>Product Design and Manufacturing</option>
                <option value='Production and Industrial Engineering'>Production and Industrial Engineering</option>
                <option value='Production Design and Manufacturing'>Production Design and Manufacturing</option>
                <option value='Production Engineering'>Production Engineering</option>
                <option value='Production Engineering and Engineering Design'>Production Engineering and Engineering Design</option>
                <option value='Production Engineering System Technology'>Production Engineering System Technology</option>
                <option value='Production Management'>Production Management</option>
                <option value='Production Technology'>Production Technology</option>
                <option value='Production Technology and Management'>Production Technology and Management</option>
                <option value='Project Management'>Project Management</option>
                <option value='Propulsion Engineering'>Propulsion Engineering</option>
                <option value='Public Health Engineering'>Public Health Engineering</option>
                <option value='Quality Engineering and Management'>Quality Engineering and Management</option>
                <option value='Radar and Communication'>Radar and Communication</option>
                <option value='Radio Frequency and Microwave Engineering'>Radio Frequency and Microwave Engineering</option>
                <option value='Radio Physics and Electronics'>Radio Physics and Electronics</option>
                <option value='Refrigeration and Air Conditioning'>Refrigeration and Air Conditioning</option>
                <option value='Reliability Engineering'>Reliability Engineering</option>
                <option value='Remote Sensing'>Remote Sensing</option>
                <option value='Remote Sensing and GIS'>Remote Sensing and GIS</option>
                <option value='Remote Sensing and Wireless Sensor Networks'>Remote Sensing and Wireless Sensor Networks</option>
                <option value='Renewable Energy'>Renewable Energy</option>
                <option value='Robotics and Automation'>Robotics and Automation</option>
                <option value='Robotics and Mechatronics'>Robotics and Mechatronics</option>
                <option value='Rocket Propulsion'>Rocket Propulsion</option>
                <option value='Rubber Technology'>Rubber Technology</option>
                <option value='Rural Technology'>Rural Technology</option>
                <option value='Science in Software Engineering'>Science in Software Engineering</option>
                <option value='Scientific Computing'>Scientific Computing</option>
                <option value='Seismic Design and Earthquake Engineering'>Seismic Design and Earthquake Engineering</option>
                <option value='Sensor Technology'>Sensor Technology</option>
                <option value='Signal Processing'>Signal Processing</option>
                <option value='Signal Processing and Communications'>Signal Processing and Communications</option>
                <option value='Signal Processing and Embedded Systems'>Signal Processing and Embedded Systems</option>
                <option value='Smart Sensing Communication and Networking'>Smart Sensing Communication and Networking</option>
                <option value='Technologies'>Technologies</option>
                <option value='Software Engineering'>Software Engineering</option>
                <option value='Software Systems'>Software Systems</option>
                <option value='Soil and Water Conservation Engineering'>Soil and Water Conservation Engineering</option>
                <option value='Soil Mechanics'>Soil Mechanics</option>
                <option value='Soil Mechanics and Foundation Engineering'>Soil Mechanics and Foundation Engineering</option>
                <option value='Solar Energy'>Solar Energy</option>
                <option value='Solar Power Systems'>Solar Power Systems</option>
                <option value='Spatial information Technology'>Spatial information Technology</option>
                <option value='Sports Technology'>Sports Technology</option>
                <option value='Structural and Construction Engineering'>Structural and Construction Engineering</option>
                <option value='Structural and Foundation Engineering'>Structural and Foundation Engineering</option>
                <option value='Structural Design'>Structural Design</option>
                <option value='Structural Dynamics and Earthquake'>Structural Dynamics and Earthquake</option>
                <option value='Engineering'>Engineering</option>
                <option value='Structural Engineering'>Structural Engineering</option>
                <option value='Structural Engineering and Construction'>Structural Engineering and Construction</option>
                <option value='Structural Engineering and Construction'>Structural Engineering and Construction</option>
                <option value='Management'>Management</option>
                <option value='Surface Coating Technology'>Surface Coating Technology</option>
                <option value='System and Network Security'>System and Network Security</option>
                <option value='System Management'>System Management</option>
                <option value='System Software'>System Software</option>
                <option value='Systems and Signal Processing'>Systems and Signal Processing</option>
                <option value='Technical Textile'>Technical Textile</option>
                <option value='Technology Management'>Technology Management</option>
                <option value='Telecommunication Engineering'>Telecommunication Engineering</option>
                <option value='Telematics'>Telematics</option>
                <option value='Textile Chemistry'>Textile Chemistry</option>
                <option value='Textile Engineering'>Textile Engineering</option>
                <option value='Textile Processing'>Textile Processing</option>
                <option value='Textile Processing Technology'>Textile Processing Technology</option>
                <option value='Textile Technology'>Textile Technology</option>
                <option value='Textile Technology (Design and Manufacturing)'>Textile Technology (Design and Manufacturing)</option>
                <option value='Thermal and Fluid Engineering'>Thermal and Fluid Engineering</option>
                <option value='Thermal Engineering'>Thermal Engineering</option>
                <option value='Thermal  Engineering  (Refrigeration  and  Air'>Thermal  Engineering  (Refrigeration  and  Air</option>
                <option value='Conditioning)'>Conditioning)</option>
                <option value='Thermal Power Engineering'>Thermal Power Engineering</option>
                <option value='Thermal Science Engineering'>Thermal Science Engineering</option>
                <option value='Thermal Sciences and Energy Systems'>Thermal Sciences and Energy Systems</option>
                <option value='Thermal Systems and Design'>Thermal Systems and Design</option>
                <option value='Tool Design'>Tool Design</option>
                <option value='Tool Engineering'>Tool Engineering</option>
                <option value='Town and Country Planning'>Town and Country Planning</option>
                <option value='Traffic and Transporting Engineering'>Traffic and Transporting Engineering</option>
                <option value='Transport Science and Technology'>Transport Science and Technology</option>
                <option value='Transportation Engineering'>Transportation Engineering</option>
                <option value='Translational Engineering'>Translational Engineering</option>
                <option value='Transportation Engineering and Management'>Transportation Engineering and Management</option>
                <option value='Transportation System Engineering'>Transportation System Engineering</option>
                <option value='Tribology and Maintenance'>Tribology and Maintenance</option>
                <option value='Turbo Machinery'>Turbo Machinery</option>
                <option value='Urban Engineering'>Urban Engineering</option>
                <option value='Virtual Prototyping and Digital Manufacturing'>Virtual Prototyping and Digital Manufacturing</option>
                <option value='VLSI'>VLSI</option>
                <option value='VLSI and Embedded Systems'>VLSI and Embedded Systems</option>
                <option value='VLSI and Embedded Systems Design'>VLSI and Embedded Systems Design</option>
                <option value='VLSI and Microelectronics'>VLSI and Microelectronics</option>
                <option value='VLSI Design'>VLSI Design</option>
                <option value='VLSI Design and Embedded Systems'>VLSI Design and Embedded Systems</option>
                <option value='VLSI Design and Signal Processing'>VLSI Design and Signal Processing</option>
                <option value='VLSI Design and Testing'>VLSI Design and Testing</option>
                <option value='VLSI System Design'>VLSI System Design</option>
                <option value='VLSI Systems'>VLSI Systems</option>
                <option value='Waste Water Management, Health and Safety'>Waste Water Management, Health and Safety</option>
                <option value='Engineering'>Engineering</option>
                <option value='Water and Environmental Technology'>Water and Environmental Technology</option>
                <option value='Water Engineering and Management'>Water Engineering and Management</option>
                <option value='Water Resource Engineering'>Water Resource Engineering</option>
                <option value='Water Resource Management'>Water Resource Management</option>
                <option value='Water Resources and Environmental'>Water Resources and Environmental</option>
                <option value='Engineering'>Engineering</option>
                <option value='Water Resources and Hydraulic Engineering'>Water Resources and Hydraulic Engineering</option>
                <option value='Water Resources and Hydro informatics'>Water Resources and Hydro informatics</option>
                <option value='Weapons Engineering'>Weapons Engineering</option>
                <option value='Web Technologies'>Web Technologies</option>
                <option value='Wired and Wireless Communication'>Wired and Wireless Communication</option>
                <option value='Wireless and Mobile Communications'>Wireless and Mobile Communications</option>
                <option value='Wireless Communication and Computing'>Wireless Communication and Computing</option>
                <option value='Wireless Communication Technology'>Wireless Communication Technology</option>
                <option value='Wireless Communications'>Wireless Communications</option>
                <option value='Wireless Networks and Applications'>Wireless Networks and Applications</option>
			`);
    } else if (value == "PG Degree in pharamacy") {
      $("#student_stream").html(`
                <option value='Industrial Pharmacy'>Industrial Pharmacy</option>
                <option value='Pharmaceutical Analysis'>Pharmaceutical Analysis</option>
                <option value='Pharmaceutical Biotechnology'>Pharmaceutical Biotechnology</option>
                <option value='Pharmaceutical Chemistry'>Pharmaceutical Chemistry</option>
                <option value='Pharmaceutical Quality Assurance'>Pharmaceutical Quality Assurance</option>
                <option value='Pharmaceutical Technology'>Pharmaceutical Technology</option>
                <option value='Pharmaceutics'>Pharmaceutics</option>
                <option value='Pharmacognosy'>Pharmacognosy</option>
                <option value='Pharmacology'>Pharmacology</option>
                <option value='Pharmacy Practice'>Pharmacy Practice</option>
                <option value='Phytopharmacy and Phytomedicine'>Phytopharmacy and Phytomedicine</option>
			`);
    } else if (value == "UG Degree in pharamacy") {
      $("#student_stream").html(`
                <option value='Industrial Pharmacy'>Industrial Pharmacy</option>
                <option value='Pharmaceutical Analysis'>Pharmaceutical Analysis</option>
                <option value='Pharmaceutical Biotechnology'>Pharmaceutical Biotechnology</option>
                <option value='Pharmaceutical Chemistry'>Pharmaceutical Chemistry</option>
                <option value='Pharmaceutical Quality Assurance'>Pharmaceutical Quality Assurance</option>
                <option value='Pharmaceutical Technology'>Pharmaceutical Technology</option>
                <option value='Pharmaceutics'>Pharmaceutics</option>
                <option value='Pharmacognosy'>Pharmacognosy</option>
                <option value='Pharmacology'>Pharmacology</option>
                <option value='Pharmacy Practice'>Pharmacy Practice</option>
                <option value='Phytopharmacy and Phytomedicine'>Phytopharmacy and Phytomedicine</option>
                        `);
    } else if (value == "Diploma in Arch") {
      $("#student_stream").html(`
                <option value='Architecture Assistantship'>Architecture Assistantship</option>
                <option value='Interior Design'>Interior Design</option>
			`);
    } else if (value == "PG in Arch") {
      $("#student_stream").html(`
                <option value='Advanced Architecture'>Advanced Architecture</option>
                <option value='Advanced Design'>Advanced Design</option>
                <option value='Architectural and Construction Project'>Architectural and Construction Project</option>
                <option value='Management'>Management</option>
                <option value='Architectural Conservation'>Architectural Conservation</option>
                <option value='Architectural Design'>Architectural Design</option>
                <option value='Architecture and Settlement Conservation'>Architecture and Settlement Conservation</option>
                <option value='Architecture Education'>Architecture Education</option>
                <option value='Building Management'>Building Management</option>
                <option value='Built Heritage'>Built Heritage</option>
                <option value='City Design'>City Design</option>
                <option value='Computer Application'>Computer Application</option>
                <option value='Construction Management'>Construction Management</option>
                <option value='Energy Efficient and Sustainable Architecture'>Energy Efficient and Sustainable Architecture</option>
                <option value='Environmental Architecture'>Environmental Architecture</option>
                <option value='Habitat Design'>Habitat Design</option>
                <option value='Housing'>Housing</option>
                <option value='Interior Architecture'>Interior Architecture</option>
                <option value='Interior Design'>Interior Design</option>
                <option value='Landscape Architecture'>Landscape Architecture</option>
                <option value='Project Management'>Project Management</option>
                <option value='Real Estate Development'>Real Estate Development</option>
                <option value='Sustainable Architecture'>Sustainable Architecture</option>
                <option value='Theory and Design'>Theory and Design</option>
                <option value='Urban Conservation'>Urban Conservation</option>
                <option value='Urban Design'>Urban Design</option>
                <option value='Urban Design and Development'>Urban Design and Development</option>
			`);
    } else if (value == "PG Degree in planning") {
      $("#student_stream").html(`
                <option value='City and Regional Planning and Management'>City and Regional Planning and Management</option>
                <option value='City Planning'>City Planning</option>
                <option value='City Planning and Management'>City Planning and Management</option>
                <option value='Community Planning'>Community Planning</option>
                <option value='Conservation Planning'>Conservation Planning</option>
                <option value='Environmental Planning'>Environmental Planning</option>
                <option value='Environmental Planning and Management'>Environmental Planning and Management</option>
                <option value='Housing'>Housing</option>
                <option value='Industrial Area Planning and Management'>Industrial Area Planning and Management</option>
                <option value='Infrastructure Planning'>Infrastructure Planning</option>
                <option value='Infrastructure Planning and Management'>Infrastructure Planning and Management</option>
                <option value='Land-Use Planning'>Land-Use Planning</option>
                <option value='Regional and Rural Development Planning'>Regional and Rural Development Planning</option>
                <option value='Regional Planning'>Regional Planning</option>
                <option value='Rural Planning and Development'>Rural Planning and Development</option>
                <option value='Rural Planning and Management'>Rural Planning and Management</option>
                <option value='Town and Country Planning'>Town and Country Planning</option>
                <option value='Town Planning'>Town Planning</option>
                <option value='Transport Planning and Management'>Transport Planning and Management</option>
                <option value='Transportation Planning'>Transportation Planning</option>
                <option value='Urban and Regional Planning'>Urban and Regional Planning</option>
                <option value='Urban and Rural Planning'>Urban and Rural Planning</option>
                <option value='Urban Design'>Urban Design</option>
                <option value='Urban Development'>Urban Development</option>
                <option value='Urban Planning'>Urban Planning</option>
			`);
    } else if (value == "Diploma in Applied Arts and Craft") {
      $("#student_stream").html(`
                <option value='Apparel Design and Fabrication Technology'>Apparel Design and Fabrication Technology</option>
                <option value='Apparel Design and Fashion Technology'>Apparel Design and Fashion Technology</option>
                <option value='Art for Drawing Teacher'>Art for Drawing Teacher</option>
                <option value='Beauty and Hair Dressing'>Beauty and Hair Dressing</option>
                <option value='Beauty Culture'>Beauty Culture</option>
                <option value='Beauty Culture and Cosmetology'>Beauty Culture and Cosmetology</option>
                <option value='Commercial Art'>Commercial Art</option>
                <option value='Cosmetology'>Cosmetology</option>
                <option value='Costume Design and Dress Making'>Costume Design and Dress Making</option>
                <option value='Costume Design and Garment Technology'>Costume Design and Garment Technology</option>
                <option value='Craft Technology'>Craft Technology</option>
                <option value='Fashion and Apparel Design'>Fashion and Apparel Design</option>
                <option value='Fashion Design and Garment Technology'>Fashion Design and Garment Technology</option>
                <option value='Fashion Designing'>Fashion Designing</option>
                <option value='Fashion Technology'>Fashion Technology</option>
                <option value='Fine Arts'>Fine Arts</option>
                <option value='Garment Technology'>Garment Technology</option>
                <option value='Home Science'>Home Science</option>
                <option value='Interior Decoration'>Interior Decoration</option>
                <option value='Interior Design'>Interior Design</option>
                <option value='Textile Design'>Textile Design</option>
                <option value='Textile Designing'>Textile Designing</option>
                <option value='Travel and Tourism'>Travel and Tourism</option>
			`);
    } else if (value == "Under Graduate Degree in Applied Arts and Craft") {
      $("#student_stream").html(`
                <option value='Accessory Design'>Accessory Design</option>
                <option value='Animation'>Animation</option>
                <option value='Applied Arts'>Applied Arts</option>
                <option value='Applied Arts and Crafts (Fashion and Apparel'>Applied Arts and Crafts (Fashion and Apparel</option>
                <option value='Design)'>Design)</option>
                <option value='AR and CR for Films'>AR and CR for Films</option>
                <option value='Audiography'>Audiography</option>
                <option value='Cinematography'>Cinematography</option>
                <option value='Commercial Art'>Commercial Art</option>
                <option value='Digital Imaging'>Digital Imaging</option>
                <option value='Fashion and Apparel Design'>Fashion and Apparel Design</option>
                <option value='Film and Media'>Film and Media</option>
                <option value='Film and Television'>Film and Television</option>
                <option value='Film Direction'>Film Direction</option>
                <option value='Film Editing'>Film Editing</option>
                <option value='Fine Arts'>Fine Arts</option>
                <option value='Fine Art (Sculpture)'>Fine Art (Sculpture)</option>
                <option value='Fine Art (Animation)'>Fine Art (Animation)</option>
                <option value='Fine Art (Ceramics)'>Fine Art (Ceramics)</option>
                <option value='Fine Art (Metal Craft)'>Fine Art (Metal Craft)</option>
                <option value='Fine Art (Photography)'>Fine Art (Photography)</option>
                <option value='Media Production Management'>Media Production Management</option>
                <option value='Painting'>Painting</option>
                <option value='Product Design'>Product Design</option>
                <option value='Screen Acting'>Screen Acting</option>
                <option value='Script Writing'>Script Writing</option>
                <option value='Sound Recording and Sound Design'>Sound Recording and Sound Design</option>
                <option value='Television'>Television</option>
                <option value='Textile Design'>Textile Design</option>
                <option value='Visual Effects'>Visual Effects</option>
			`);
    } else if (value == "PG Degree in Applied Arts and Craft") {
      $("#student_stream").html(`
                <option value='Advertisement and Public Relation'>Advertisement and Public Relation</option>
                <option value='Applied Arts'>Applied Arts</option>
                <option value='Applied Art (Visual Communication Design)'>Applied Art (Visual Communication Design)</option>
                <option value='Applied Art (Communication Design)'>Applied Art (Communication Design)</option>
                <option value='Applied Art (Illustration)'>Applied Art (Illustration)</option>
                <option value='Customer Service Management'>Customer Service Management</option>
                <option value='Direction'>Direction</option>
                <option value='Electronic Cinematography'>Electronic Cinematography</option>
                <option value='Fashion Technology'>Fashion Technology</option>
                <option value='Feature Film Screenplay Writing'>Feature Film Screenplay Writing</option>
                <option value='Film Archiving'>Film Archiving</option>
                <option value='Film Studies'>Film Studies</option>
                <option value='Fine Art (Painting)'>Fine Art (Painting)</option>
                <option value='Fine Art (Mural)'>Fine Art (Mural)</option>
                <option value='Fine Art (Sculpture)'>Fine Art (Sculpture)</option>
                <option value='Fine Art (Photography and Media'>Fine Art (Photography and Media</option>
                <option value='Communication)'>Communication)</option>
                <option value='Fine Arts'>Fine Arts</option>
			`);
    } else if (value == "BSc") {
      $("#student_stream").html(`
                <option value='Information Techology'>Information Techology</option>
                <option value='Computer Science'>Computer Science</option>
                <option value='Physics'>Physics</option>
                <option value='Chemistry'>Chemistry</option>
                <option value='Maths'>Maths</option>
                <option value='Botany'>Botany</option>
                <option value='Zoology'>Zoology</option>
                <option value='Microbiology'>Microbiology</option>
                <option value='Biotechnology'>Biotechnology</option>
                <option value='Geology'>Geology</option>
                <option value='Electronics'>Electronics</option>
                <option value='Veterinary Sciences'>Veterinary Sciences</option>
                <option value='Horticulture'>Horticulture</option>
                <option value='Environmental Science'>Environmental Science</option>
                <option value='Nursing'>Nursing</option>
                <option value='Anaesthesia Technology'>Anaesthesia Technology</option>
                <option value='Operation Theatre Technology<'>Operation Theatre Technology</option>
                <option value='(MT) Radiography'>(MT) Radiography</option>
                <option value='Applied Life Sciences'>Applied Life Sciences</option>
                <option value='Applied Science'>Veterinary Sciences</option>
                <option value='Applied Physical Science (Analytical Chemistry)'>Applied Physical Science (Analytical Chemistry)</option>
                <option value='Home Science (Pass)'>Home Science (Pass)</option>
                <option value='Life Sciences'>Life Sciences</option>
                <option value='Physical Education & Sports Sciences'>Physical Education & Sports Sciences</option>
                <option value='Physical Science with Chemistry'>Physical Science with Chemistry</option>
                <option value='Applied Life Sciences with Agro-Chemical & Pest Management'>Applied Life Sciences with Agro-Chemical & Pest Management</option>
        
			`);
    } else if (value == "BSc (Hons)") {
      $("#student_stream").html(`
                <option value='Mathematical Science'>Mathematical Science</option>
                <option value='Anthropology'>Anthropology</option>
                <option value='Biomedical Science'>Biomedical Science</option>
                <option value='Chemistry'>Chemistry</option>
                <option value='Maths'>Maths</option>
                <option value='Botany'>Botany</option>
                <option value='Zoology'>Zoology</option>
                <option value='Microbiology'>Microbiology</option>
                <option value='Biotechnology'>Biotechnology</option>
                <option value='Geology'>Geology</option>
                <option value='Electronics'>Electronics</option>
                <option value='Veterinary Sciences'>Veterinary Sciences</option>
                <option value='Horticulture'>Horticulture</option>
			`);
    } else if (value == "L.L.M") {
      $("#student_stream").html(`
            <option value='L.L.M.'>L.L.M.</option>
        `);
    }
  else if (value == "Master of Education (M.Ed.)") {
      $("#student_stream").html(`
            <option value='Master of Education (M.Ed.)'>Master of Education (M.Ed.)</option>
        `);
    }else if (value == "Master of Library & Information Science (M.L.I.Sc)") {
      $("#student_stream").html(`
            <option value='Master of Library & Information Science (M.L.I.Sc)'>Master of Library & Information Science (M.L.I.Sc)</option>
        `);
    }
    else if (value == "Masters of Mathematics Education") {
      $("#student_stream").html(`
            <option value='Masters of Mathematics Education'>Masters of Mathematics Education</option>
        `);
    }else if (value == "M.Sc") {
    $("#student_stream").html(`
    <option value='Agriculture'>Agriculture</option>
    <option value='Anthropology'>Anthropology</option>
    <option value='Botany'>Botany</option>  
    <option value='Biotechnology'>Biotechnology</option>
    <option value='Biology'>Biology</option>
    <option value='Biomedical Sciences'>Biomedical Sciences</option>
    <option value='Chemistry'>Chemistry</option>
    <option value='Computer Science'>Computer Science</option>
    <option value='Development Communication & Extension'>Development Communication & Extension</option>
    <option value='Electronics'>Electronics</option>
    <option value='Environmental Science'>Environmental Science</option>
    <option value='Fabric & Apparel Science'>Fabric & Apparel Science</option>
    <option value='Geology'>Geology</option>
    <option value='Genetics'>Genetics</option>
    <option value='Horticulture'>Horticulture</option>
    <option value='Human Development & Childhood Studies'>Human Development & Childhood Studies</option>
    <option value='Informatics'>Informatics</option>
    <option value='Information Techology'>Information Techology</option>
    <option value='Maths'>Maths</option>
    <option value='Microbiology'>Microbiology</option>
    <option value='Operational Research and Applied Operational Research'>Operational Research and Applied Operational Research</option>
    <option value='Physics'>Physics</option>
    <option value='Plant Molecular Biology & Biotechnology'>Plant Molecular Biology & Biotechnology</option>
    <option value='Resource Management & Design Application'>Resource Management & DesignApplication</option>
    <option value='Veterinary Sciences'>Veterinary Sciences</option> 
    <option value='Zoology'>Zoology</option>
          `);
  } else if (value == "BBA") {
      $("#student_stream").html(`
            <option value='BBA'>BBA</option>
        `);
    }
	else if (value == "DCA") {
      $("#student_stream").html(`
            <option value='DCA'>DCA</option>
        `);
    }
    else if (value == "PGDCA") {
      $("#student_stream_pg").html(`
            <option value='PGDCA'>PGDCA</option>
        `);
    } 

  else if (value == "Masters of Social Work") {
      $("#student_stream").html(`
            <option value='Masters of Social Work'>Masters of Social Work</option>
        `);
    } else if (value == "Bachelor of Social Work") {
      $("#student_stream").html(`
            <option value='Bachelor of Social Work'>Bachelor of Social Work</option>
        `);
    } else if (value == "MPlan") {
      $("#student_stream").html(`
            <option value='MPlan'>MPlan</option>
        `);
    } else if (value == "MArch") {
      $("#student_stream").html(`
            <option value='MArch'>MArch</option>
        `);
    } else if (value == "Any") {
      $("#student_stream").html(`
            <option value='Any'>Any</option>
        `);
    } else if (value == "D.Pharma") {
      $("#student_stream").html(`
            <option value='D.Pharma'>D.Pharma</option>
        `);
    } else if (value == "B.Pharma") {
      $("#student_stream").html(`
            <option value='B.Pharma'>B.Pharma</option>
        `);
    } else if (value == "BTech in Foreign Language") {
      $("#student_stream").html(`
            <option value='BTech in Foreign Language'>BTech in Foreign Language</option>
        `);
    } else if (value == "BCA") {
      $("#student_stream").html(`
            <option value='BCA'>BCA</option>
        `);
    } else if (value == "Diploma In Geo Informatics") {
      $("#student_stream").html(`
            <option value='Gis'>Gis</option>
        `);
    } else if (value == "LLB") {
      $("#student_stream").html(`
            <option value='LLB'>LLB</option>
        `);
    } else if (value == "BCOM") {
      $("#student_stream").html(`
            <option value='BCOM'>BCOM</option>
        `);
    } else if (value == "General Nursing And Midwifery") {
      $("#student_stream").html(`
            <option value='General Nursing And Midwifery'>General Nursing And Midwifery</option>
        `);
    } else if (value == "Auxilary Nurse Midwife") {
      $("#student_stream").html(`
            <option value='Auxilary Nurse Midwife'>Auxilary Nurse Midwife</option>
        `);
    } else if (value == "Auxilary Nurse and Midwife") {
      $("#student_stream").html(`
            <option value='Auxilary Nurse and Midwife'>Auxilary Nurse and Midwi$
        `);
    } else if (value == "Multipurpose Health Worker") {
      $("#student_stream").html(`
            <option value='Multipurpose Health Worker'>Multipurpose Health Worker</option>
        `);
    } else if (value == "MBA") {
      $("#student_stream").html(`
            <option value='Finance'>Finance</option>
            <option value='Marketing'>Marketing</option>
            <option value='Operations'>Operations</option>
            <option value='Human Resources'>Human Resources</option>
            <option value='General'>General</option>
            <option value='Others'>Others</option>
            <option value='Entrepreneurship'>Entrepreneurship</option>
            <option value='Strategic'>Strategic</option>
            <option value='Investment'>Investment </option>
            <option value='Banking & Wealth'>Banking & Wealth</option>
            <option value='International'>International</option>
            <option value='Marketing'>Marketing</option>
        `);
    } else if (value == "MCA") {
      $("#student_stream").html(`
            <option value='MCA'>MCA</option>
        `);
}else if (value == "BLIS") {
      $("#student_stream").html(`
            <option value='BLIS'>BLIS</option>
        `);
		
    } else if (value == "MCOM") {
      $("#student_stream").html(`
            <option value='MCOM'>MCOM</option>
        `);
    } else if (value == "BPlan") {
      $("#student_stream").html(`
            <option value='BPlan'>BPlan</option>
        `);
    } else if (value == "B.Arch") {
      $("#student_stream").html(`
            <option value='B.Arch'>B.Arch</option>
        `);
    } else if (value == "BAMS") {
      $("#student_stream").html(`
            <option value='BAMS'>BAMS</option>
        `);
    } else if (value == "MBBS") {
      $("#student_stream").html(`
            <option value='MBBS'>MBBS</option>
        `);
    } else if (value == "BDS") {
      $("#student_stream").html(`
            <option value='BDS'>BDS</option>
        `);
    } else if (value == "BAMS(ayurvedic)") {
      $("#student_stream").html(`
            <option value='BAMS(ayurvedic)'>BAMS(ayurvedic)</option>
        `);
    } else if (value == "BHMS(homeopathy)") {
      $("#student_stream").html(`
            <option value='BHMS(homeopathy)'>BHMS(homeopathy)</option>
        `);
    } else if (value == "BUMS(Unani)") {
      $("#student_stream").html(`
            <option value='BUMS(Unani)'>BUMS(Unani)</option>
        `);
    } else if (
      value == "B.VSc AH(Bachelor of vaterinary sciences and animal husbandry)"
    ) {
      $("#student_stream").html(`
            <option value='B.VSc AH(Bachelor of vaterinary sciences and animal husbandry)'>B.VSc AH(Bachelor of vaterinary sciences and animal husbandry)</option>
        `);
    } else if (value == "BNYS(Bachelor of naturopathy and yogic sciences)") {
      $("#student_stream").html(`
            <option value='BNYS(Bachelor of naturopathy and yogic sciences)'>BNYS(Bachelor of naturopathy and yogic sciences)</option>
        `);
    } else if (value == "BPT(Bachelor of physiotherapy)") {
      $("#student_stream").html(`
            <option value='BPT(Bachelor of physiotherapy)'>BPT(Bachelor of physiotherapy)</option>
        `);
    } else if (value == "BOT(Bachelor of occupational therapy)") {
      $("#student_stream").html(`
            <option value='BOT(Bachelor of occupational therapy)'>BOT(Bachelor of occupational therapy)</option>
        `);
    } 
    else if (value == "BFA") {
        $("#student_stream").html(`
              <option value='Fine Arts'>Fine Arts</option>
          `);
      }
    else if (value == "BA") {
      $("#student_stream").html(`
            <option value='Business Economics'>Business Economics</option>
            <option value='Economics'>Economics</option>
            <option value='Environmental Studies'>Environmental Studies</option>
            <option value='English'>English</option>
            <option value='Hindi'>Hindi</option>
            <option value='Mathematics'>Mathematics</option>
            <option value='Socialogy'>Sociology</option>
            <option value='Statistics'>Statistics</option>
            <option value='Vocational Studies'>Vocational Studies</option>
        `);
    } else if (value == "BA (Hons)") {
      $("#student_stream").html(`
            <option value='Arabic'> Arabic</option>
            <option value='Applied Psychology'>Applied Psychology</option>
            <option value='Bengali'>Bengali</option>
            <option value='Business Economics (BBE)'>Business Economics (BBE)</option>
            <option value='Economics'>Economics</option>
            <option value='English'>English</option>
            <option value='French'>French</option>
            <option value='Geography'>Geography</option>
            <option value='German'>German</option> 
            <option value='Hindi'>Hindi</option>
            <option value='Hindi Journalism and Mass Communication'>Hindi Journalism and Mass Communication</option>
            <option value='History'>History</option>
            <option value='Italian'>Italian</option>
            <option value='Journalism'>Journalism</option>
            <option value='Music'>Music</option>
            <option value='Patrakarita Evam Jansanchar'>Patrakarita Evam Jansanchar</option>
            <option value='Persian'>Persian</option>
            <option value='Political Science'>Political Science</option>
            <option value='Philosophy'>Philosophy</option>
            <option value='Psychology'>Psychology</option>
            <option value='Punjabi'>Punjabi</option>
            <option value='Sanskrit'>Sanskrit</option>
            <option value='Social Work'>Social Work</option>
            <option value='Spanish'>Spanish</option>
            <option value='Urdu'>Urdu</option>
        `);
    } else if (value == "MA") {
      $("#student_stream").html(`
      <option value="Arabic">Arabic</option>
      <option value="Applied Psychology">Applied Psychology</option>
      <option value="Bengali">Bengali</option>
      <option value="Buddhist Studies">Buddhist Studies</option>
      <option value="Business Economics">Business Economics</option>
      <option value="Comparative Indian Literature">Comparative Indian Literature</option>
      <option value="East Asian Studies">East Asian Studies</option>
      <option value="Economics">Economics</option>
      <option value="English">English</option>
      <option value="Environmental Studies">Environmental Studies</option>   
      <option value="French">French</option> 
      <option value="Geography">Geography</option>
      <option value="German">German</option>
      <option value="(Hindustani Music) Vocal/Instrumental">(Hindustani Music) Vocal/Instrumental</option>
      <option value="Hindi">Hindi</option>
      <option value="History">History</option>
      <option value="Hispanic">Hispanic</option>
      <option value="Italian">Italian</option>
      <option value="Japanese">Japanese</option>
      <option value="Life Long Learning & Extension">Life Long Learning & Extension</option>
      <option value="Linguistics">Linguistics</option>
      <option value='Mathematics'>Mathematics</option>
      <option value="Philosophy">Philosophy</option>
      <option value="Persian">Persian</option>
      <option value="Political Science">Political Science</option>
      <option value="Punjabi">Punjabi</option>
      <option value="Psychology">Psychology</option>
      <option value="Russian Studies">Russian Studies</option>
      <option value="Sanskrit">Sanskrit</option>
      <option value="Social Work">Social Work</option>
      <option value="Socialogy">Sociology</option>
      <option value="Statistics">Statistics</option>
      <option value="Statistics">Statistics</option>
      <option value="Tamil">Tamil</option>
      <option value="Urdu">Urdu</option>
        `);
    } else if (value == "Bachelor Of Jounalism and Mass Comunication") {
      $("#student_stream").html(`
            <option value='Bachelor Of Jounalism and Mass Comunication'>Bachelor Of Jounalism and Mass Comunication</option>
        `);
    } else if (value == "BTech/Bplan") {
      $("#student_stream").html(`
            <option value='Environment planning'>Environment Planning</option>
            <option value='Transport planning'>Transport Planning</option>      
            <option value='Urban planning'>Urban Planning</option>
            <option value='Urban sanitation'>Urban Sanitation</option>
            <option value='Urban governance and management'>Urban Governance and Management</option>
        `);
    } else if (value == "BDES(UX)") {
      $("#student_stream").html(`
            <option value="BDES(UX)">BDES(UX)</option>
        `);
    } else if (value == "MDES(UX)") {
      $("#student_stream").html(`
            <option value="MDES(UX)">MDES(UX)</option>
        `);
    } else if (value == "CS") {
      $("#student_stream").html(`
            <option value='NA'>Not Available</option>
        `);
    } else if (value == "CA") {
          $("#student_stream").html(`
                <option value='NA'>Not Available</option>
            `);
    } else if (value == "Post Graduate Diploma in Geo Informatics") {
      $("#student_stream").html(`
            <option value='Post Graduate Diploma in Geo Informatics'>Post Graduate Diploma in Geo Informatics</option>
        `);
    } else if (value == "Registered nurse registered Midwife") {
      $("#student_stream").html(`
            <option value='Registered nurse registered Midwife'>Registered nurse registered Midwife</option>
        `);
    } else if (value == "Diploma in Nursing") {
      $("#student_stream").html(`
            <option value='Diploma in Nursing'>Diploma in Nursing</option>
        `);
    } else if (value == "General Nursing and Midwifery") {
      $("#student_stream").html(`
            <option value='General Nursing and Midwifery'>General Nursing and Midwifery</option>
        `);
    }
    else if (value == "LL.M.") {
      $("#student_stream").html(`
            <option value='LL.M.'>LL.M.</option>
        `);
    }
    else if (value == "Master of Physical Education") {
      $("#student_stream").html(`
            <option value='Master of Physical Education'>Master of Physical Education</option>
        `);
    }
    else if (value == "B.Ed.") {
        $("#student_stream").html(`
        <option value='No Specialisation'>No Specialisation</option>
              <option value='Special Education MR'>Special Education MR</option>
              <option value='Home Science'>Home Science</option>
          `);
      }
      else if (value == "B.El.Ed.") {
        $("#student_stream").html(`
              <option value='B.El.Ed.'>B.El.Ed.</option>
          `);
      }
      else if (value == "B.P.Ed.") {
        $("#student_stream").html(`
              <option value='B.P.Ed.'>B.P.Ed.</option>
          `);
      }
  });
});
