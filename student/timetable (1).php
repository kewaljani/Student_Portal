<?php
  $branch = $_POST["branch"];
  $sem = $_POST["semester"];
  $sub = $_POST["subject"];
  if($branch == "C.E"){
    if($sem == 1){
      switch ($sub) {
        case "ENGINEERING MATHEMATICS –I":
          header("location:https://ldrp.ac.in/images/syllabus/CC101-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20I.pdf");
          break;
        case "ENGINEERING PHYSICS":
          header("location:https://ldrp.ac.in/images/syllabus/CC107-N-ENGINEERING%20PHYSICS.pdf");
          break;
        case "FUNDAMENTAL OF PROGRAMMING":
          header("location:https://ldrp.ac.in/images/syllabus/CC103-N-FUNDAMENTAL%20OF%20%20PROGRAMMING.pdf");
          break;
        case "ELEMENTS OF CIVIL ENGINEERING":
          header("location:https://ldrp.ac.in/images/syllabus/CC109-N-ELEMENTS%20OF%20CIVIL%20%20ENGINEERING.pdf");
          break;
        case "ENGINEERING GRAPHICS" :
          header("location:https://ldrp.ac.in/images/syllabus/CC110-N-ENGINEERING%20GRAPHICS.pdf");
          break;
        default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
      }
    }
    else if($sem == 2){
      switch ($sub) {
        case "ENGINEERING MATHEMATICS –II":
          header("locatin:https://ldrp.ac.in/images/syllabus/CC201-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20II.pdf");
          break;
        case "Basic Electrical and Electronics Engineering":
          header("location:https://ldrp.ac.in/images/syllabus/CC102-N-BASIC%20ELECTRICAL%20&%20%20ELECTRONICS%20ENGINEERING.pdf");
          break;
        case "OBJECT ORIENTED PROGRAMMING USING C++":
          header("location:https://ldrp.ac.in/images/syllabus/CC111-N-OBJECT%20ORIENTED%20%20PROGRAMMIENG%20USING%20C++.pdf");
          break;
        case "FUNDAMENTAL OF MECHANICAL ENGINEERING":
          header("location:https://ldrp.ac.in/images/syllabus/CC104-N-FUNDAMENTAL%20OF%20MECHANICAL%20%20ENGINEERING.pdf");
          break;
        case "WORKSHOP":
          header("location:https://ldrp.ac.in/images/syllabus/CC105-N-EC-CE-IT-WORKSHOPS.pdf");
          break;
        case "Business communication and presentation skills":
          header("location:https://ldrp.ac.in/images/syllabus/CC106-N-BUSINESS%20COMMUNICATION%20AND%20%20PRESENTATION%20SKILLS%20.pdf");
          break;
        default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
      }
    }
    else if($sem == 3){
      switch ($sub) {
        case "Discrete Mathematics":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC301B%20-%20Discrete%20Mathematics.pdf");
          break;
        case "Linear Electronics":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE302%20-%20Linear%20Electronics.pdf");
          break;
        case "Data Communication and Netwroking":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE303%20-%20Data%20Communication%20and%20Networking.pdf");
          break;
        case "Data Structures and Algorithms":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE304%20-%20Data%20Structures%20and%20Algorithms.pdf");
          break;
        case "Database Management System":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE305%20-%20Database%20Management%20Systems.pdf");
          break;
        default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
      }
    }
    else if($sem == 4){
      switch ($sub) {
        case "Probability and Numerical Methods":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC401B%20-%20Probability%20and%20Numerical%20Method.pdf");
          break;
        case "Computer Networking":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE402%20-%20Computer%20Networking.pdf");
          break;
        case "Computer Organization and Architecture":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE403%20-%20Computer%20Organization%20and%20Architecture.pdf");
          break;
        case "Design and Analysis of Algorithms":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE404%20-%20Design%20and%20Analysis%20of%20Algorithms.pdf");
          break;
        case "Object Oriented Analysis and Design":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE405%20-%20Object%20Oriented%20Analysis%20and%20Design.pdf");
          break;
        case "Unix Shell Programming and System Administration":
          header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE406%20-%20Unix%20Shell%20Programming%20And%20System%20Administration.pdf");
          break;
        default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
        }
      }
      else if($sem == 5){
        switch ($sub) {
          case "Principles of Management":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC501%20-%20Principles%20Of%20Management.pdf");
            break;
          case "Advanced Processors":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE502%20-%20Advanced%20Processors.pdf");
            break;
          case "Operating System":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE503%20-%20Operating%20System.pdf");
            break;
          case "System Software":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE504%20-%20System%20Software.pdf");
            break;
          case "Object Oriented Programming with Java":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE505%20-%20Object%20Oriented%20Programming%20with%20JAVA.pdf");
            break;
          case "Web Technology":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE506%20-%20Web%20Technology.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else if($sem == 6){
        switch ($sub) {
          case "Cryptography and Network Security":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE601%20-%20Cryptography%20&%20Network%20Security.pdf");
            break;
          case "Artificial Intelligence":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE602%20-%20Artificial%20Intelligence.pdf");
            break;
          case "Software Engineering":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE603%20-%20Software%20Engineering.pdf");
            break;
          case "Theory of Computation":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE604%20-%20Theory%20of%20Computation.pdf");
            break;
          case "Advanced Java Programming":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE605-1%20Advanced%20Java%20Programming.pdf");
            break;
          case "Advance .net Technology":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE605-2%20Advance%20.Net%20Technology.pdf");
            break;
          case "Python Programming":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE605-3%20Python%20Programming.pdf");
            break;
          case "Distributed Systems":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE606-1%20Distributed%20System.pdf");
            break;
          case "Optimization Techniques":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE606-4%20Optimization%20Techniques.pdf");
            break;
          default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
        }
      }
      else if($sem == 7){
        switch ($sub) {
          case "Compiler Design":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/701%20CD.pdf");
            break;
          case "Next Generation Networks":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/702_NGN.pdf");
            break;
          case "Mobile Application Development with Android":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/703-2_android.pdf");
            break;
          case "Internet of Things":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/704-4%20IoT.pdf");
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else{
        switch ($sub) {
          case "Big Data Analytics":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/801_Bid%20Data%20Analytics.pdf");
            break;
          case "Information Retrieval":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/802-1_IR.pdf");
            break;
          case "Soft Computing":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/802-3%20soft%20computing.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
  }
  else if($branch == "E.C"){
    if($sem == 1){
      //echo $sub;
      switch ($sub) {
        case "ENGINEERING MATHEMATICS –I":
          header("location:https://ldrp.ac.in/images/syllabus/CC101-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20I.pdf");
          break;
        case "ENGINEERING PHYSICS":
          header("location:https://ldrp.ac.in/images/syllabus/CC107-N-ENGINEERING%20PHYSICS.pdf");
          break;
        case "FUNDAMENTAL OF PROGRAMMING":
          header("location:https://ldrp.ac.in/images/syllabus/CC103-N-FUNDAMENTAL%20OF%20%20PROGRAMMING.pdf");
          break;
        case "ELEMENTS OF CIVIL ENGINEERING":
          header("location:https://ldrp.ac.in/images/syllabus/CC109-N-ELEMENTS%20OF%20CIVIL%20%20ENGINEERING.pdf");
          break;
        case "ENGINEERING GRAPHICS" :
          header("location:https://ldrp.ac.in/images/syllabus/CC110-N-ENGINEERING%20GRAPHICS.pdf");
          break;
        default:
        echo "<script type='text/javascript'>alert('course not available');</script>";
        header("locaton:course.html");
          break;
      }
    }
    else if($sem == 2){
      switch ($sub) {
        case "ENGINEERING MATHEMATICS –II":
          header("locatin:https://ldrp.ac.in/images/syllabus/CC201-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20II.pdf");
          break;
        case "Basic Electrical and Electronics Engineering":
          header("location:https://ldrp.ac.in/images/syllabus/CC102-N-BASIC%20ELECTRICAL%20&%20%20ELECTRONICS%20ENGINEERING.pdf");
          break;
        case "OBJECT ORIENTED PROGRAMMING USING C++":
          header("location:https://ldrp.ac.in/images/syllabus/CC111-N-OBJECT%20ORIENTED%20%20PROGRAMMIENG%20USING%20C++.pdf");
          break;
        case "FUNDAMENTAL OF MECHANICAL ENGINEERING":
          header("location:https://ldrp.ac.in/images/syllabus/CC104-N-FUNDAMENTAL%20OF%20MECHANICAL%20%20ENGINEERING.pdf");
          break;
        case "WORKSHOP":
          header("location:https://ldrp.ac.in/images/syllabus/CC105-N-EC-CE-IT-WORKSHOPS.pdf");
          break;
        case "Business communication and presentation skills":
          header("location:https://ldrp.ac.in/images/syllabus/CC106-N-BUSINESS%20COMMUNICATION%20AND%20%20PRESENTATION%20SKILLS%20.pdf");
          break;
        default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
      }
    }
    else if($sem == 3){
      switch ($sub) {
        case "Differential Equations and Integral Transforms":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/CC301A%20%20-%20Differential%20Equations%20And%20Integral%20transform.pdf");
          break;
        case "Circuit Theory":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC302%20-%20Circuit%20Theory.pdf");
          break;
        case "Basic Electronics":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC303%20-%20Basic%20Electronics.pdf");
          break;
        case "Digital Logic Design":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC304%20-%20Digital%20logic%20design.pdf");
          break;
        case "Electrical Machines":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC305%20-%20Electrical%20Machines.pdf");
          break;
        case "Electronics Workshop -II":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC306%20-%20Electronics%20Workshop%20II.pdf");
          break;
        default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
      }
    }
    else if($sem == 4){
      switch ($sub) {
        case "Complex Analysis & Numerical Analysis":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/CC401A%20-%20Complex%20Analysis%20and%20Numerical%20Analysis.pdf");
          break;
        case "Control System":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC402%20-%20Control%20system.pdf");
          break;
        case "Advance Electronics":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC403%20-%20Advance%20Electronics.pdf");
          break;
        case " Microprocessor Architecture & Interfacing":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC404%20-%20Microprocessor%20Architecture%20And%20Interfacing.pdf");
          break;
        case "Electronics Measurements & Measuring Instruments":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC405%20-%20Electronic%20Measurements%20and%20Measuring%20Instruments.pdf");
          break;
        case "Seminar":
          header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC406%20-%20Seminar.pdf");
          break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else if($sem == 5){
        switch ($sub) {
          case "Principles of Management":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC501%20-%20Principles%20Of%20Management.pdf");
            break;
          case "Microcontroller & Interfacing":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC502%20-%20Microcontroller%20and%20Interfacing.pdf");
            break;
          case "Electromagnetics Theory":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC503%20-%20Electromagnetic%20Theory.pdf");
            break;
          case "Electronic Communication":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC504%20-%20Electronic%20Communication.pdf");
            break;
          case "Integrated Circuits and Applications":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC505%20-%20Integrated%20Circuits%20and%20Applications.pdf");
            break;
          case "VLSI Technology and Design":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC506%20-%20VLSI%20Technology%20and%20Design.pdf");
            break;
          case "Electronics Manufacturing and Testing":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC507%20-%20Electronics%20Manufacturing%20and%20Testing.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else if($sem == 6){
        switch ($sub) {
          case "Digital Communication":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC601%20-%20Digital%20Communication.pdf");
            break;
          case "Antenna And Wave Propagation":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC602%20-%20Antenna%20&%20Wave%20Propagation.pdf");
            break;
          case "Power Electronics":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC603%20-%20Power%20Electronics.pdf");
            break;
          case "Optical Fiber Communication":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC604%20-%20Optical%20Fiber%20Communication.pdf");
            break;
          case "Audio Video Systems":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC605%20-%20Audio%20Video%20Systems.pdf");
            break;
          case "Data Communication and Networking":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/EC606%20-%20Data%20Communication%20and%20Networking.pdf");
            break;
          default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
          break;
        }
      }
      else if($sem == 7){
        switch ($sub) {
          case "Digital Signal Processing":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_701_digital.pdf");
            break;
          case "Wireless & Mobile Communication":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_702_wireless.pdf");
            break;
          case "Microwave Engineering":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_703_micro.pdf");
            break;
          case "Satellite Communication":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_704_a_satellite.pdf");
            break;
          case "Embedded Systems":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_704_b_embedd.pdf");
            break;
          case "Biomedical Instrumentation":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_704_c_Biomedical%20Instrumentation%20(2).pdf");
            break;
          case "CMOS Analog Circuit Design":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_704_d_cmos.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else{
        switch ($sub) {
          case "Digital Image Processing":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_801_imagae.pdf");
            break;
          case "Advanced Microprocessor":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_802_A_advance.pdf");
            break;
          case "Radar and Navigational Aids":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_802_B_radar.pdf");
            break;
          case "Robotics Engineering":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_802_C_robotics.pdf");
            break;
          case "Telecommunication Switching and Networks":
            header("location:https://ldrp.ac.in/images/syllabus/BE%20-%20Electronics%20and%20Communications/a_ec_802_D_telecom.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
  }
  else if($branch == "I.T"){
     if($sem == 1){
       //echo $sub;
       switch ($sub) {
         case "ENGINEERING MATHEMATICS –I":
           header("location:https://ldrp.ac.in/images/syllabus/CC101-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20I.pdf");
           break;
         case "ENGINEERING PHYSICS":
           header("location:https://ldrp.ac.in/images/syllabus/CC107-N-ENGINEERING%20PHYSICS.pdf");
           break;
         case "FUNDAMENTAL OF PROGRAMMING":
           header("location:https://ldrp.ac.in/images/syllabus/CC103-N-FUNDAMENTAL%20OF%20%20PROGRAMMING.pdf");
           break;
         case "ELEMENTS OF CIVIL ENGINEERING":
           header("location:https://ldrp.ac.in/images/syllabus/CC109-N-ELEMENTS%20OF%20CIVIL%20%20ENGINEERING.pdf");
           break;
         case "ENGINEERING GRAPHICS" :
           header("location:https://ldrp.ac.in/images/syllabus/CC110-N-ENGINEERING%20GRAPHICS.pdf");
           break;
         default:
         echo "<script type='text/javascript'>alert('course not available');</script>";
         header("locaton:course.html");
           break;
       }
     }
     else if($sem == 2){
       switch ($sub) {
         case "ENGINEERING MATHEMATICS –II":
           header("locatin:https://ldrp.ac.in/images/syllabus/CC201-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20II.pdf");
           break;
         case "Basic Electrical and Electronics Engineering":
           header("location:https://ldrp.ac.in/images/syllabus/CC102-N-BASIC%20ELECTRICAL%20&%20%20ELECTRONICS%20ENGINEERING.pdf");
           break;
         case "OBJECT ORIENTED PROGRAMMING USING C++":
           header("location:https://ldrp.ac.in/images/syllabus/CC111-N-OBJECT%20ORIENTED%20%20PROGRAMMIENG%20USING%20C++.pdf");
           break;
         case "FUNDAMENTAL OF MECHANICAL ENGINEERING":
           header("location:https://ldrp.ac.in/images/syllabus/CC104-N-FUNDAMENTAL%20OF%20MECHANICAL%20%20ENGINEERING.pdf");
           break;
         case "WORKSHOP":
           header("location:https://ldrp.ac.in/images/syllabus/CC105-N-EC-CE-IT-WORKSHOPS.pdf");
           break;
         case "Business communication and presentation skills":
           header("location:https://ldrp.ac.in/images/syllabus/CC106-N-BUSINESS%20COMMUNICATION%20AND%20%20PRESENTATION%20SKILLS%20.pdf");
           break;
         default:
           echo "<script type='text/javascript'>alert('course not available');</script>";
           header("locaton:course.html");
           break;
       }
     }
     else if($sem == 3){
       switch ($sub) {
         case "Discrete Mathematics":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC301B%20-%20Discrete%20Mathematics.pdf");
           break;
         case "Linear Electronics":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE302%20-%20Linear%20Electronics.pdf");
           break;
         case "Data Communication and Netwroking":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE303%20-%20Data%20Communication%20and%20Networking.pdf");
           break;
         case "Data Structures and Algorithms":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE304%20-%20Data%20Structures%20and%20Algorithms.pdf");
           break;
         case "Database Management System":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE305%20-%20Database%20Management%20Systems.pdf");
           break;
         default:
           echo "<script type='text/javascript'>alert('course not available');</script>";
           header("locaton:course.html");
           break;
       }
     }
     else if($sem == 4){
       switch ($sub) {
         case "Probability and Numerical Methods":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC401B%20-%20Probability%20and%20Numerical%20Method.pdf");
           break;
         case "Computer Networking":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE402%20-%20Computer%20Networking.pdf");
           break;
         case "Computer Organization and Architecture":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE403%20-%20Computer%20Organization%20and%20Architecture.pdf");
           break;
         case "Design and Analysis of Algorithms":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE404%20-%20Design%20and%20Analysis%20of%20Algorithms.pdf");
           break;
         case "Object Oriented Analysis and Design":
           header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE405%20-%20Object%20Oriented%20Analysis%20and%20Design.pdf");
           break;
         case "Enterprise Resource Planning":
           header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/IT406%20-%20Enterprise%20Resource%20Planning.pdf");
           break;
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
         }
       }
       else if($sem == 5){
         switch ($sub) {
           case "Principles of Management":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CC501%20-%20Principles%20Of%20Management.pdf");
             break;
           case "Information Security":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/IT502%20-%20Information%20Security.pdf");
             break;
           case "Operating System":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE503%20-%20Operating%20System.pdf");
             break;
           case "System Software":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE504%20-%20System%20Software.pdf");
             break;
           case "Object Oriented Programming with Java":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE505%20-%20Object%20Oriented%20Programming%20with%20JAVA.pdf");
             break;
           case "Internet Technology":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/IT506%20-%20Internet%20Technology.pdf");
             break;
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
         }
       }
       else if($sem == 6){
         switch ($sub) {
           case "Mobile Computing":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/IT601%20-%20Mobile%20Computing.pdf");
             break;
           case "Artificial Intelligence":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE602%20-%20Artificial%20Intelligence.pdf");
             break;
           case "Service Oriented Architecture":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/IT603%20-%20Service%20Oriented%20Architecture.pdf");
             break;
           case "Theory of Computation":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE604%20-%20Theory%20of%20Computation.pdf");
             break;
           case "Advanced Java Programming":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE605-1%20Advanced%20Java%20Programming.pdf");
             break;
           case "Advance .net Technology":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE605-2%20Advance%20.Net%20Technology.pdf");
             break;
           case "Python Programming":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE605-3%20Python%20Programming.pdf");
             break;
           case "Distributed Systems":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE606-1%20Distributed%20System.pdf");
             break;
           case "Optimization Techniques":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/CE606-4%20Optimization%20Techniques.pdf");
             break;
           default:
           echo "<script type='text/javascript'>alert('course not available');</script>";
           header("locaton:course.html");
           break;
         }
       }
       else if($sem == 7){
         switch ($sub) {
           case "Big Data Analytics":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/701-Bid%20Data%20Analytics.pdf");
             break;
           case "Data Compression":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/702-DC%20N.pdf");
             break;
           case "Mobile Application Development with Android":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/703-2_android.pdf");
             break;
           case "Internet of Things":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/704-4%20IoT.pdf");
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
         }
       }
       else{
         switch ($sub) {
           case "Wireless Sensor Network":
             header("location:https://ldrp.ac.in/images/syllabus/BE-%20Information%20Technology/801-WSN.pdf");
             break;
           case "Information Retrieval":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/802-1_IR.pdf");
             break;
           case "Soft Computing":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Computer/802-3%20soft%20computing.pdf");
             break;
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
         }
       }
   }
   else if($branch == "Electrical"){
      if($sem == 1){
        //echo $sub;
        switch ($sub) {
          case "Engineering Mathematics –I":
            header("location:https://ldrp.ac.in/images/syllabus/CC101-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20I.pdf");
            break;
          case " Basic Electrical and Electronics Engineering":
            header("location:https://ldrp.ac.in/images/syllabus/CC102-N-BASIC%20ELECTRICAL%20&%20%20ELECTRONICS%20ENGINEERING.pdf");
            break;
          case "Fundamentals of Programming":
            header("location:https://ldrp.ac.in/images/syllabus/CC103-N-FUNDAMENTAL%20OF%20%20PROGRAMMING.pdf");
            break;
          case "Fundamentals of Mechanical Engineering":
            header("location:https://ldrp.ac.in/images/syllabus/CC104-N-FUNDAMENTALS%20OF%20MECHANICAL%20%20ENGINEERING.pdf");
            break;
          case "Business communication and presentation skills" :
            header("location:https://ldrp.ac.in/images/syllabus/CC106-N-BUSINESS%20COMMUNICATION%20AND%20%20PRESENTATION%20SKILLS%20.pdf");
            break;
          default:
          echo "<script type='text/javascript'>alert('course not available');</script>";
          header("locaton:course.html");
            break;
        }
      }
      else if($sem == 2){
        switch ($sub) {
          case "Engineering Mathematics–II":
            header("locatin:https://ldrp.ac.in/images/syllabus/CC201-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20II.pdf");
            break;
          case "Engineering Physics":
            header("location:https://ldrp.ac.in/images/syllabus/CC107-N-ENGINEERING%20PHYSICS.pdf");
            break;
          case "Mechanics of solids":
            header("location:https://ldrp.ac.in/images/syllabus/CC108-N-MECHANICS%20OF%20SOLIDS.pdf");
            break;
          case "Elements of Civil Engineering":
            header("location:https://ldrp.ac.in/images/syllabus/CC109-N-ELEMENTS%20OF%20CIVIL%20%20ENGINEERING.pdf");
            break;
          case "Engineering Graphics":
            header("location:https://ldrp.ac.in/images/syllabus/CC110-N-ENGINEERING%20GRAPHICS.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else if($sem == 3){
        switch ($sub) {
          case "Differential Equations and Integral Transforms":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/CC301A%20%20-%20Differential%20Equations%20And%20Integral%20transform.pdf");
            break;
          case "Circuit Theory":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE302%20-%20Circuit%20Theory.pdf");
            break;
          case "Electrical Measurement and Measuring Instruments":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE303%20-%20Electrical%20Measurement%20and%20Measuring%20Instruments.pdf");
            break;
          case "Electrical Machine-I":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE304%20-%20Electrical%20Machines-I.pdf");
            break;
          case "Electronics Devices and Circuits":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE305%20-%20Electronics%20Devices%20and%20Circuits.pdf");
            break;
          case "Electrical and Electronics Workshop":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE306%20-%20Electrical%20and%20Electronics%20workshop.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
        }
      }
      else if($sem == 4){
        switch ($sub) {
          case "Complex Analysis and Numerical Analysis":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/CC401A%20-%20Complex%20Analysis%20and%20Numerical%20Analysis.pdf");
            break;
          case "Control Systems":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE402%20-%20Control%20System.pdf");
            break;
          case "Electrical Machine-II":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE403%20-%20Electrical%20Machines-II.pdf");
            break;
          case "Analog Electronics":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE404%20-%20Analog%20Electronics.pdf");
            break;
          case "Digital Electronics":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE405%20-%20Digital%20Electronics.pdf");
            break;
          case "Electrical Power-I":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE406%20-%20Electrical%20Power%20-%20I.pdf");
            break;
          case "Analog and Digital Electronics Lab":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE407%20-%20Analog%20and%20Digital%20Electronics%20lab.pdf");
            break;
          case "Simulation Laboratory":
            header("location:https://ldrp.ac.in/images/syllabus/BE-Electrical/EE408%20-%20Simulation%20laboratory.pdf");
            break;
          default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
          }
        }
        else if($sem == 5){
          switch ($sub) {
            case "Theory of Machines":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME501%20-%20Theory%20of%20Machines.pdf");
              break;
            case "Machine Design-I":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME502%20-%20Machine%20Deign-I.pdf");
              break;
            case "Manufacturing Processes":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME503%20-%20Manufacturing%20Process.pdf");
              break;
            case "Industrial Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME504%20-%20Industrial%20Engineering.pdf");
              break;
            case "Heat and Mass Transfer":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME505%20-%20Heat%20&%20Mass%20Transfer.pdf");
              break;
            case "Thermal Power Plant Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME506%20-%20Thermal%20Power%20Plant%20Engineering.pdf");
              break;
            default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
          }
        }
        else if($sem == 6){
          switch ($sub) {
            case "Principles of Management":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/CC601%20-%20Principles%20of%20Management.pdf");
              break;
            case "Dynamics of Machinery":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME602%20-%20Dynamics%20of%20Machinery.pdf");
              break;
            case "Computer Aided Design":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME603%20-%20Computer%20Aided%20Design.pdf");
              break;
            case "Fluid Power Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME604%20-%20Fluid%20Power%20Engineering.pdf");
              break;
            case "Internal Combustion Engine":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME605%20-%20Internal%20Combustion%20Engineering.pdf");
              break;
            case "Engineering Costing & Estimating":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME606%20-%20Engineering%20Costing%20&%20Estimating.pdf");
              break;
            default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
            break;
          }
        }
        else if($sem == 7){
          switch ($sub) {
            case "Automobile Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20701-Automobile%20Engineering.pdf");
              break;
            case "Refrigeration and Air-Conditioning":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20702-Refrigeration%20and%20Air-Conditioning.pdf");
              break;
            case "Computer Integrated Manufacturing":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20703-Computer%20Integrated%20Manufacturing.pdf");
              break;
            case "Production Technology":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20704-Production%20Technology.pdf");
              break;
            case "Control Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20705-Control%20Engineering.pdf");
              break;
            case "Artificial Intelligence and Robotics":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20A-Artificial%20Intelligence%20and%20Robotics.pdf");
              break;
            case "Mechanics of Composite Materials":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20B-Mechanics%20of%20Composite%20Materials.pdf");
              break;
            case "Gas Dynamics":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20C-Gas%20Dynamics.pdf");
              break;
            case "Quality and Reliability Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20D-Quality%20and%20Reliability%20Engineering.pdf");
              break;
            default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
          }
        }
        else{
          switch ($sub) {
            case "Operations Research":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20801-Operations%20Research.pdf");
              break;
            case "Machine Design -II":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20803-Machine%20Design%20-%20II.pdf");
              break;
            case "Steam and Gas Turbines":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20802-Steam%20and%20Gas%20Turbines.pdf");
              break;
            case "Automobile Body Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20A-Automobile%20Body%20Engineering.pdf");
              break;
            case "Industrial Tribology":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20B-Industrial%20Tribology.pdf");
              break;
            case "Product Development & Value Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20C-Product%20Development%20&%20Value%20Engineering.pdf");
              break;
            case "Machine Tool Design":
              header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20D-Machine%20Tool%20Design.pdf");
              break;
            default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
          }
        }
    }
    else if($branch == "M.E"){
       if($sem == 1){
         //echo $sub;
         switch ($sub) {
           case "Engineering Mathematics –I":
             header("location:https://ldrp.ac.in/images/syllabus/CC101-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20I.pdf");
             break;
           case " Basic Electrical and Electronics Engineering":
             header("location:https://ldrp.ac.in/images/syllabus/CC102-N-BASIC%20ELECTRICAL%20&%20%20ELECTRONICS%20ENGINEERING.pdf");
             break;
           case "Fundamentals of Programming":
             header("location:https://ldrp.ac.in/images/syllabus/CC103-N-FUNDAMENTAL%20OF%20%20PROGRAMMING.pdf");
             break;
           case "Fundamentals of Mechanical Engineering":
             header("location:https://ldrp.ac.in/images/syllabus/CC104-N-FUNDAMENTALS%20OF%20MECHANICAL%20%20ENGINEERING.pdf");
             break;
           case "Business communication and presentation skills" :
             header("location:https://ldrp.ac.in/images/syllabus/CC106-N-BUSINESS%20COMMUNICATION%20AND%20%20PRESENTATION%20SKILLS%20.pdf");
             break;
           default:
           echo "<script type='text/javascript'>alert('course not available');</script>";
           header("locaton:course.html");
             break;
         }
       }
       else if($sem == 2){
         switch ($sub) {
           case "Engineering Mathematics–II":
             header("locatin:https://ldrp.ac.in/images/syllabus/CC201-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20II.pdf");
             break;
           case "Engineering Physics":
             header("location:https://ldrp.ac.in/images/syllabus/CC107-N-ENGINEERING%20PHYSICS.pdf");
             break;
           case "Mechanics of solids":
             header("location:https://ldrp.ac.in/images/syllabus/CC108-N-MECHANICS%20OF%20SOLIDS.pdf");
             break;
           case "Elements of Civil Engineering":
             header("location:https://ldrp.ac.in/images/syllabus/CC109-N-ELEMENTS%20OF%20CIVIL%20%20ENGINEERING.pdf");
             break;
           case "Engineering Graphics":
             header("location:https://ldrp.ac.in/images/syllabus/CC110-N-ENGINEERING%20GRAPHICS.pdf");
             break;
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
         }
       }
       else if($sem == 3){
         switch ($sub) {
           case "Differential Equations and Integral Transforms":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/CC301A%20%20-%20Differential%20Equations%20And%20Integral%20transform.pdf");
             break;
           case "Kinematics of Machines":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME302%20-%20Kinematics%20of%20Machines.pdf");
             break;
           case "Machining and Casting Progress":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME303%20-%20Machining%20&%20Casting%20Processes.pdf");
             break;
           case "Material Science and Metallurgy":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME304%20-%20Material%20science%20and%20metallurgy.pdf");
             break;
           case "Advanced Strength of Materials":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME305%20-%20Advance%20Strength%20of%20Material.pdf");
             break;
           case "Engineering Thermodynamics":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME306%20-%20Engineering%20Thermodynamics.pdf");
             break;
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
         }
       }
       else if($sem == 4){
         switch ($sub) {
           case "Complex Analysis and Numerical Analysis":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/CC401A%20-%20Complex%20Analysis%20and%20Numerical%20Analysis.pdf");
             break;
           case "Electrical Machines & Electronics":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME402%20-%20Electrical%20Machines%20and%20Electronics.pdf");
             break;
           case "NonConventional Energy Sources":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME403%20-%20Non%20Conventional%20Energy%20Sources.pdf");
             break;
           case "Industrial Drafting and Machine Design":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME404%20-%20Industrial%20drafting%20&%20machine%20design.pdf");
             break;
           case "Mechanical Measurement and Instrumentation":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME405%20-%20Mechanical%20Measurement%20&%20Metrology.pdf");
             break;
           case "Fluid Mechanics":
             header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME406%20-%20Fluid%20Mechanics.pdf");
             break;
           default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
           }
         }
         else if($sem == 5){
           switch ($sub) {
             case "Theory of Machines":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME501%20-%20Theory%20of%20Machines.pdf");
               break;
             case "Machine Design-I":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME502%20-%20Machine%20Deign-I.pdf");
               break;
             case "Manufacturing Processes":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME503%20-%20Manufacturing%20Process.pdf");
               break;
             case "Industrial Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME504%20-%20Industrial%20Engineering.pdf");
               break;
             case "Heat and Mass Transfer":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME505%20-%20Heat%20&%20Mass%20Transfer.pdf");
               break;
             case "Thermal Power Plant Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME506%20-%20Thermal%20Power%20Plant%20Engineering.pdf");
               break;
             default:
               echo "<script type='text/javascript'>alert('course not available');</script>";
               header("locaton:course.html");
               break;
           }
         }
         else if($sem == 6){
           switch ($sub) {
             case "Principles of Management":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/CC601%20-%20Principles%20of%20Management.pdf");
               break;
             case "Dynamics of Machinery":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME602%20-%20Dynamics%20of%20Machinery.pdf");
               break;
             case "Computer Aided Design":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME603%20-%20Computer%20Aided%20Design.pdf");
               break;
             case "Fluid Power Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME604%20-%20Fluid%20Power%20Engineering.pdf");
               break;
             case "Internal Combustion Engine":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME605%20-%20Internal%20Combustion%20Engineering.pdf");
               break;
             case "Engineering Costing & Estimating":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME606%20-%20Engineering%20Costing%20&%20Estimating.pdf");
               break;
             default:
             echo "<script type='text/javascript'>alert('course not available');</script>";
             header("locaton:course.html");
             break;
           }
         }
         else if($sem == 7){
           switch ($sub) {
             case "Automobile Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20701-Automobile%20Engineering.pdf");
               break;
             case "Refrigeration and Air-Conditioning":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20702-Refrigeration%20and%20Air-Conditioning.pdf");
               break;
             case "Computer Integrated Manufacturing":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20703-Computer%20Integrated%20Manufacturing.pdf");
               break;
             case "Production Technology":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20704-Production%20Technology.pdf");
               break;
             case "Control Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20705-Control%20Engineering.pdf");
               break;
             case "Artificial Intelligence and Robotics":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20A-Artificial%20Intelligence%20and%20Robotics.pdf");
               break;
             case "Mechanics of Composite Materials":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20B-Mechanics%20of%20Composite%20Materials.pdf");
               break;
             case "Gas Dynamics":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20C-Gas%20Dynamics.pdf");
               break;
             case "Quality and Reliability Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20706%20D-Quality%20and%20Reliability%20Engineering.pdf");
               break;
             default:
               echo "<script type='text/javascript'>alert('course not available');</script>";
               header("locaton:course.html");
               break;
           }
         }
         else{
           switch ($sub) {
             case "Operations Research":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20801-Operations%20Research.pdf");
               break;
             case "Machine Design -II":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20803-Machine%20Design%20-%20II.pdf");
               break;
             case "Steam and Gas Turbines":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20802-Steam%20and%20Gas%20Turbines.pdf");
               break;
             case "Automobile Body Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20A-Automobile%20Body%20Engineering.pdf");
               break;
             case "Industrial Tribology":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20B-Industrial%20Tribology.pdf");
               break;
             case "Product Development & Value Engineering":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20C-Product%20Development%20&%20Value%20Engineering.pdf");
               break;
             case "Machine Tool Design":
               header("location:https://ldrp.ac.in/images/syllabus/BE-Mechanical/ME%20805%20D-Machine%20Tool%20Design.pdf");
               break;
             default:
               echo "<script type='text/javascript'>alert('course not available');</script>";
               header("locaton:course.html");
               break;
           }
         }
     }
     else if($branch == "Civil"){
        if($sem == 1){
          //echo $sub;
          switch ($sub) {
            case "Engineering Mathematics –I":
              header("location:https://ldrp.ac.in/images/syllabus/CC101-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20I.pdf");
              break;
            case " Basic Electrical and Electronics Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/CC102-N-BASIC%20ELECTRICAL%20&%20%20ELECTRONICS%20ENGINEERING.pdf");
              break;
            case "Fundamentals of Programming":
              header("location:https://ldrp.ac.in/images/syllabus/CC103-N-FUNDAMENTAL%20OF%20%20PROGRAMMING.pdf");
              break;
            case "Fundamentals of Mechanical Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/CC104-N-FUNDAMENTALS%20OF%20MECHANICAL%20%20ENGINEERING.pdf");
              break;
            case "Business communication and presentation skills" :
              header("location:https://ldrp.ac.in/images/syllabus/CC106-N-BUSINESS%20COMMUNICATION%20AND%20%20PRESENTATION%20SKILLS%20.pdf");
              break;
            default:
            echo "<script type='text/javascript'>alert('course not available');</script>";
            header("locaton:course.html");
              break;
          }
        }
        else if($sem == 2){
          switch ($sub) {
            case "Engineering Mathematics–II":
              header("locatin:https://ldrp.ac.in/images/syllabus/CC201-N-ENGINEERING%20MATHEMATICS%20%E2%80%93%20II.pdf");
              break;
            case "Engineering Physics":
              header("location:https://ldrp.ac.in/images/syllabus/CC107-N-ENGINEERING%20PHYSICS.pdf");
              break;
            case "Mechanics of solids":
              header("location:https://ldrp.ac.in/images/syllabus/CC108-N-MECHANICS%20OF%20SOLIDS.pdf");
              break;
            case "Elements of Civil Engineering":
              header("location:https://ldrp.ac.in/images/syllabus/CC109-N-ELEMENTS%20OF%20CIVIL%20%20ENGINEERING.pdf");
              break;
            case "Engineering Graphics":
              header("location:https://ldrp.ac.in/images/syllabus/CC110-N-ENGINEERING%20GRAPHICS.pdf");
              break;
            default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
          }
        }
        else if($sem == 3){
          switch ($sub) {
            case "Principles of Management":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Electrical-CBCS/CC301-N.pdf");
              break;
            case "Differential Equations and Transforms":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Electrical-CBCS/CC302A-N.pdf");
              break;
            case "Computer Aided Civil Engineering Drawing ":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV303-N.pdf");
              break;
            case "Concrete Technology":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV304-N.pdf");
              break;
            case "Structural Analysis - I":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV305-N.pdf");
              break;
            case "Surveying":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV306-N.pdf");
              break;
            default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
          }
        }
        else if($sem == 4){
          switch ($sub) {
            case "Complex Variable and Numerical Techniques":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-ME-Auto-CBCS/CC402A-N.pdf");
              break;
            case "Advanced Surveying":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV403-N.pdf");
              break;
            case "Building Construction":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV404-N.pdf");
              break;
            case "Fluid Mechanics":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV405-N.pdf");
              break;
            case "Highway Engineering":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV406-N.pdf");
              break;
            case "Structural Analysis - II":
              header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV407-N.pdf");
              break;
            default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
            }
          }
          else if($sem == 5){
            switch ($sub) {
              case "Advanced Construction Technology":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV501-N,%20Advanced%20Construction%20Technology%20-%20I.pdf");
                break;
              case "Applied Fluid Mechanics":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV502-N,%20Applied%20Fluid%20Mechanics.pdf");
                break;
              case "Design of Reinforced Concrete Structures":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV503-N,%20Design%20of%20Reinforced%20Concrete%20Structures.pdf");
                break;
              case "Environmental Engineering–I":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV504-N,%20Environmental%20Engineering%20-%20I.pdf");
                break;
              case "Geotechnical Engineering–I":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV505-N,%20Geotechnical%20Engineering%20-%20I.pdf");
                break;
              case "Railway Bridge and Tunnel Engineering":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV506-N,%20Railway%20Bridge%20and%20Tunnel%20Engineering.pdf");
                break;
              default:
                echo "<script type='text/javascript'>alert('course not available');</script>";
                header("locaton:course.html");
                break;
            }
          }
          else if($sem == 6){
            switch ($sub) {
              case "Construction Equipments and Management":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV601-N,%20Construction%20Equipments%20and%20Management.pdf");
                break;
              case "Environmental Engineering–II":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV602-N,%20Environmental%20Engineering%20-%20II.pdf");
                break;
              case "Estimation Costing and Valuation":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV603-N,%20Estimation%20Costing%20and%20Valuation.pdf");
                break;
              case "Geotechnical Engineering–II":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV604-N,%20Geotechnical%20Engineering%20-%20II.pdf");
                break;
              case "Hydrology and Water Resource Management":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV605-N,%20Hydrology%20and%20Water%20Resource%20Management.pdf");
                break;
              case "Docks, Harbour and Airport Engineering":
                header("location:https://www.ldrp.ac.in/images/syllabus/BE-Civil-CBCS/CV606-N-B,%20Docks%20Harbour%20and%20Airport%20Engineering.pdf");
                break;
              default:
              echo "<script type='text/javascript'>alert('course not available');</script>";
              header("locaton:course.html");
              break;
            }
          }
          else if($sem == 7){
            switch ($sub) {
              case "Design of Steel Structure":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV701-Design%20of%20Steel%20Structure.pdf");
                break;
              case "Construction Management and Equipment":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV702-Construction%20Management%20and%20Equipment.pdf");
                break;
              case "Irrigation Engineering":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV703-Irrigation%20Engineering.pdf");
                break;
              case "Urban Transportation System":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/Cv704-B-Urban%20Transportation%20Sysem.pdf");
                break;
              case "Hazardous Waste Management":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV704-C-Hazardous%20Waste%20Management.pdf");
                break;
              default:
                echo "<script type='text/javascript'>alert('course not available');</script>";
                header("locaton:course.html");
                break;
            }
          }
          else{
            switch ($sub) {
              case "Earthquake Engineering":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV801-Earthquake%20Engineering.pdf");
                break;
              case "Estimation, Costing and Valuation":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV802-Estimation,%20Costing%20&%20Valuation.pdf");
                break;
              case "Design of Hydraulic Structures":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV%20803-DESIGN%20OF%20HYDRAULIC%20STRUCTURES.pdf");
                break;
              case "Traffic Engineering and Management":
                header("location:https://ldrp.ac.in/images/syllabus/BE-Civil/CV804-B-TRAFFIC%20ENGINEERING%20AND%20MANAGEMENT.pdf");
                break;
              default:
                echo "<script type='text/javascript'>alert('course not available');</script>";
                header("locaton:course.html");
                break;
            }
          }
      }
 ?>
