$(document).ready(function(){
    console.log("Ready");
	$("#student_course_diploma" ).change(function() {
        var value = $("#student_course_diploma").val();
		if (value == "Diploma In Engineering") {
			$("#student_stream_diploma").html(`
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
		}
 else if (value == "Diploma in Arch") {
			$("#student_stream_diploma").html(`
                <option value='Architecture Assistantship'>Architecture Assistantship</option>
                <option value='Interior Design'>Interior Design</option>
			`);
		}  else if (value == "Diploma in Applied Arts and Craft") {
			$("#student_stream_diploma").html(`
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
		} 
	else if(value == "Any"){
            $("#student_stream_diploma").html(`
            <option value='Any'>Any</option>
        `);
        }
	 else if(value == "D.Pharma"){
            $("#student_stream_diploma").html(`
            <option value='D.Pharma'>D.Pharma</option>
        `);
        }
	else if(value == "Diploma In Geo Informatics"){
            $("#student_stream_diploma").html(`
            <option value='Gis'>Gis</option>
        `);
        }
	else if(value == "General Nursing And Midwifery"){
            $("#student_stream_diploma").html(`
            <option value='General Nursing And Midwifery'>General Nursing And Midwifery</option>
        `);
        }
	 else if(value == "Auxilary Nurse Midwife"){
            $("#student_stream_diploma").html(`
            <option value='Auxilary Nurse Midwife'>Auxilary Nurse Midwife</option>
        `);
        }
	 else if(value == "Multipurpose Health Worker"){
            $("#student_stream_diploma").html(`
            <option value='Multipurpose Health Worker'>Multipurpose Health Worker</option>
        `);
        }
	 else if(value == "Registered nurse registered Midwife"){
            $("#student_stream_diploma").html(`
            <option value='Registered nurse registered Midwife'>Registered nurse registered Midwife</option>
        `);
        }
	 else if(value == "Diploma in Nursing"){
            $("#student_stream_diploma").html(`
            <option value='Diploma in Nursing'>Diploma in Nursing</option>
        `);
        }

	 else if(value == "General Nursing and Midwifery"){
            $("#student_stream_diploma").html(`
            <option value='General Nursing and Midwifery'>General Nursing and Midwifery</option>
        `);
        }

	});


});
