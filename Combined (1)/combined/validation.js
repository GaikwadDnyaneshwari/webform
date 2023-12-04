
    var trainingFeesInput = document.getElementById('trainingFees');
    var trainingFeesValidationMessage = document.getElementById('trainingFeesValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    trainingFeesInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (trainingFeesInput.value.trim() === '') {
            trainingFeesInput.classList.add('is-invalid');
            trainingFeesValidationMessage.style.display = 'block';
        } else {
            trainingFeesInput.classList.remove('is-invalid');
            trainingFeesValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    trainingFeesInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (trainingFeesInput.value.trim() === '') {
                trainingFeesInput.classList.add('is-invalid');
                trainingFeesValidationMessage.style.display = 'block';
            } else {
                trainingFeesInput.classList.remove('is-invalid');
                trainingFeesValidationMessage.style.display = 'none';
            }
        }
    });


    //first name feedback
   
        var firstNameInput = document.getElementById('firstName');
        var firstNameValidationMessage = document.getElementById('firstNameValidationMessage');
        var hasInteracted = false;

        // Add an event listener to detect when the input field is blurred (loses focus).
        firstNameInput.addEventListener('blur', function () {
            hasInteracted = true;

            if (firstNameInput.value.trim() === '') {
                firstNameInput.classList.add('is-invalid');
                firstNameValidationMessage.style.display = 'block';
            } else {
                firstNameInput.classList.remove('is-invalid');
                firstNameValidationMessage.style.display = 'none';
            }
        });

        // Add an event listener to reset the validation state when the user starts typing.
        firstNameInput.addEventListener('input', function () {
            if (hasInteracted) {
                if (firstNameInput.value.trim() === '') {
                    firstNameInput.classList.add('is-invalid');
                    firstNameValidationMessage.style.display = 'block';
                } else {
                    firstNameInput.classList.remove('is-invalid');
                    firstNameValidationMessage.style.display = 'none';
                }
            }
        });
    
    
  // middlename feedback 
   
        var middleNameInput = document.getElementById('middleName');
        var middleNameValidationMessage = document.getElementById('middleNameValidationMessage');
        var hasInteracted = false;

        // Add an event listener to detect when the input field is blurred (loses focus).
        middleNameInput.addEventListener('blur', function () {
            hasInteracted = true;

            if (middleNameInput.value.trim() === '') {
                middleNameInput.classList.add('is-invalid');
                middleNameValidationMessage.style.display = 'block';
            } else {
                middleNameInput.classList.remove('is-invalid');
                middleNameValidationMessage.style.display = 'none';
            }
        });

        // Add an event listener to reset the validation state when the user starts typing.
        middleNameInput.addEventListener('input', function () {
            if (hasInteracted) {
                if (middleNameInput.value.trim() === '') {
                    middleNameInput.classList.add('is-invalid');
                    middleNameValidationMessage.style.display = 'block';
                } else {
                    middleNameInput.classList.remove('is-invalid');
                    middleNameValidationMessage.style.display = 'none';
                }
            }
        });
   
    
    // <!--last name feedback-->
   
    var lastNameInput = document.getElementById('lastName');
    var lastNameValidationMessage = document.getElementById('lastNameValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    lastNameInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (lastNameInput.value.trim() === '') {
            lastNameInput.classList.add('is-invalid');
            lastNameValidationMessage.style.display = 'block';
        } else {
            lastNameInput.classList.remove('is-invalid');
            lastNameValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    lastNameInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (lastNameInput.value.trim() === '') {
                lastNameInput.classList.add('is-invalid');
                lastNameValidationMessage.style.display = 'block';
            } else {
                lastNameInput.classList.remove('is-invalid');
                lastNameValidationMessage.style.display = 'none';
            }
        }
    });


// <!--date of birth feedback-->


    var dateOfBirthInput = document.getElementById('dateOfBirth');
    var dateOfBirthValidationMessage = document.getElementById('dateOfBirthValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    dateOfBirthInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (dateOfBirthInput.value.trim() === '') {
            dateOfBirthInput.classList.add('is-invalid');
            dateOfBirthValidationMessage.style.display = 'block';
        } else {
            dateOfBirthInput.classList.remove('is-invalid');
            dateOfBirthValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    dateOfBirthInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (dateOfBirthInput.value.trim() === '') {
                dateOfBirthInput.classList.add('is-invalid');
                dateOfBirthValidationMessage.style.display = 'block';
            } else {
                dateOfBirthInput.classList.remove('is-invalid');
                dateOfBirthValidationMessage.style.display = 'none';
            }
        }
    });


// <!--age feedback -->

    var ageInput = document.getElementById('age');
    var ageValidationMessage = document.getElementById('ageValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    ageInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (ageInput.value.trim() === '') {
            ageInput.classList.add('is-invalid');
            ageValidationMessage.style.display = 'block';
        } else {
            ageInput.classList.remove('is-invalid');
            ageValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    ageInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (ageInput.value.trim() === '') {
                ageInput.classList.add('is-invalid');
                ageValidationMessage.style.display = 'block';
            } else {
                ageInput.classList.remove('is-invalid');
                ageValidationMessage.style.display = 'none';
            }
        }
    });


// <!--enter your mother name-->

    var mothersNameInput = document.getElementById('mothersName');
    var mothersNameValidationMessage = document.getElementById('mothersNameValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    mothersNameInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (mothersNameInput.value.trim() === '') {
            mothersNameInput.classList.add('is-invalid');
            mothersNameValidationMessage.style.display = 'block';
        } else {
            mothersNameInput.classList.remove('is-invalid');
            mothersNameValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    mothersNameInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (mothersNameInput.value.trim() === '') {
                mothersNameInput.classList.add('is-invalid');
                mothersNameValidationMessage.style.display = 'block';
            } else {
                mothersNameInput.classList.remove('is-invalid');
                mothersNameValidationMessage.style.display = 'none';
            }
        }
    });


// <!--mobile number-->

    var mobileInput = document.getElementById('mobile');
    var mobileValidationMessage = document.getElementById('mobileValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    mobileInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (mobileInput.value.trim() === '') {
            mobileInput.classList.add('is-invalid');
            mobileValidationMessage.style.display = 'block';
        } else {
            mobileInput.classList.remove('is-invalid');
            mobileValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    mobileInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (mobileInput.value.trim() === '') {
                mobileInput.classList.add('is-invalid');
                mobileValidationMessage.style.display = 'block';
            } else {
                mobileInput.classList.remove('is-invalid');
                mobileValidationMessage.style.display = 'none';
            }
        }
    });


    // <!--for Email-->

    var emailInput = document.getElementById('email');
    var emailValidationMessage = document.getElementById('emailValidationMessage');
    var hasInteracted = false;

    // Add an event listener to detect when the input field is blurred (loses focus).
    emailInput.addEventListener('blur', function () {
        hasInteracted = true;

        if (emailInput.value.trim() === '') {
            emailInput.classList.add('is-invalid');
            emailValidationMessage.style.display = 'block';
        } else {
            emailInput.classList.remove('is-invalid');
            emailValidationMessage.style.display = 'none';
        }
    });

    // Add an event listener to reset the validation state when the user starts typing.
    emailInput.addEventListener('input', function () {
        if (hasInteracted) {
            if (emailInput.value.trim() === '') {
                emailInput.classList.add('is-invalid');
                emailValidationMessage.style.display = 'block';
            } else {
                emailInput.classList.remove('is-invalid');
                emailValidationMessage.style.display = 'none';
            }
        }
    });

     // <!--for permanent address-->

     var permanentAddressInput = document.getElementById('permanentAddress');
     var permanentAddressValidationMessage = document.getElementById('permanentAddressValidationMessage');
     var hasInteracted = false;
 
     // Add an event listener to detect when the input field is blurred (loses focus).
     permanentAddressInput.addEventListener('blur', function () {
         hasInteracted = true;
 
         if (permanentAddressInput.value.trim() === '') {
             permanentAddressInput.classList.add('is-invalid');
             permanentAddressValidationMessage.style.display = 'block';
         } else {
             permanentAddressInput.classList.remove('is-invalid');
             permanentAddressValidationMessage.style.display = 'none';
         }
     });
 
     // Add an event listener to reset the validation state when the user starts typing.
     permanentAddressInput.addEventListener('input', function () {
         if (hasInteracted) {
             if (permanentAddressInput.value.trim() === '') {
                 permanentAddressInput.classList.add('is-invalid');
                 permanentAddressValidationMessage.style.display = 'block';
             } else {
                 permanentAddressInput.classList.remove('is-invalid');
                 permanentAddressValidationMessage.style.display = 'none';
             }
         }
     });

       // <!--for correspondence address-->

       var correspondenceAddressInput = document.getElementById('correspondenceAddress');
       var correspondenceAddressValidationMessage = document.getElementById('correspondenceAddressValidationMessage');
       var hasInteracted = false;
   
       // Add an event listener to detect when the input field is blurred (loses focus).
       correspondenceAddressInput.addEventListener('blur', function () {
           hasInteracted = true;
   
           if (correspondenceAddressInput.value.trim() === '') {
               correspondenceAddressInput.classList.add('is-invalid');
               correspondenceAddressValidationMessage.style.display = 'block';
           } else {
               correspondenceAddressInput.classList.remove('is-invalid');
               correspondenceAddressValidationMessage.style.display = 'none';
           }
       });
   
       // Add an event listener to reset the validation state when the user starts typing.
       correspondenceAddressInput.addEventListener('input', function () {
           if (hasInteracted) {
               if (correspondenceAddressInput.value.trim() === '') {
                   correspondenceAddressInput.classList.add('is-invalid');
                   correspondenceAddressValidationMessage.style.display = 'block';
               } else {
                   correspondenceAddressInput.classList.remove('is-invalid');
                   correspondenceAddressValidationMessage.style.display = 'none';
               }
           }
       });

       // <!--for ssc place-->

       var placeInput = document.getElementById('place');
       var placeValidationMessage = document.getElementById('placeValidationMessage');
       var hasInteracted = false;
   
       // Add an event listener to detect when the input field is blurred (loses focus).
       placeInput.addEventListener('blur', function () {
           hasInteracted = true;
   
           if (placeInput.value.trim() === '') {
               placeInput.classList.add('is-invalid');
               placeValidationMessage.style.display = 'block';
           } else {
               placeInput.classList.remove('is-invalid');
               placeValidationMessage.style.display = 'none';
           }
       });
   
       // Add an event listener to reset the validation state when the user starts typing.
       placeInput.addEventListener('input', function () {
           if (hasInteracted) {
               if (placeInput.value.trim() === '') {
                   placeInput.classList.add('is-invalid');
                   placeValidationMessage.style.display = 'block';
               } else {
                   placeInput.classList.remove('is-invalid');
                   placeValidationMessage.style.display = 'none';
               }
           }
       });

        // <!--for ssc University-->

        var universityInput = document.getElementById('university');
        var universityValidationMessage = document.getElementById('universityValidationMessage');
        var hasInteracted = false;
    
        // Add an event listener to detect when the input field is blurred (loses focus).
        universityInput.addEventListener('blur', function () {
            hasInteracted = true;
    
            if (universityInput.value.trim() === '') {
                universityInput.classList.add('is-invalid');
                universityValidationMessage.style.display = 'block';
            } else {
                universityInput.classList.remove('is-invalid');
                universityValidationMessage.style.display = 'none';
            }
        });
    
        // Add an event listener to reset the validation state when the user starts typing.
        universityInput.addEventListener('input', function () {
            if (hasInteracted) {
                if (universityInput.value.trim() === '') {
                    universityInput.classList.add('is-invalid');
                    universityValidationMessage.style.display = 'block';
                } else {
                    universityInput.classList.remove('is-invalid');
                    universityValidationMessage.style.display = 'none';
                }
            }
        });

         // <!--for ssc Percentage-->

         var percentageInput = document.getElementById('percentage');
         var percentageValidationMessage = document.getElementById('percentageValidationMessage');
         var hasInteracted = false;
     
         // Add an event listener to detect when the input field is blurred (loses focus).
         percentageInput.addEventListener('blur', function () {
             hasInteracted = true;
     
             if (percentageInput.value.trim() === '') {
                 percentageInput.classList.add('is-invalid');
                 percentageValidationMessage.style.display = 'block';
             } else {
                 percentageInput.classList.remove('is-invalid');
                 percentageValidationMessage.style.display = 'none';
             }
         });
     
         // Add an event listener to reset the validation state when the user starts typing.
         percentageInput.addEventListener('input', function () {
             if (hasInteracted) {
                 if (percentageInput.value.trim() === '') {
                     percentageInput.classList.add('is-invalid');
                     percentageValidationMessage.style.display = 'block';
                 } else {
                     percentageInput.classList.remove('is-invalid');
                     percentageValidationMessage.style.display = 'none';
                 }
             }
         });

          // <!--for ssc Year of Passing-->

          var yearOfPassingInput = document.getElementById('yearOfPassing');
          var yearOfPassingValidationMessage = document.getElementById('yearOfPassingValidationMessage');
          var hasInteracted = false;
      
          // Add an event listener to detect when the input field is blurred (loses focus).
          yearOfPassingInput.addEventListener('blur', function () {
              hasInteracted = true;
      
              if (yearOfPassingInput.value.trim() === '') {
                  yearOfPassingInput.classList.add('is-invalid');
                  yearOfPassingValidationMessage.style.display = 'block';
              } else {
                  yearOfPassingInput.classList.remove('is-invalid');
                  yearOfPassingValidationMessage.style.display = 'none';
              }
          });
      
          // Add an event listener to reset the validation state when the user starts typing.
          yearOfPassingInput.addEventListener('input', function () {
              if (hasInteracted) {
                  if (yearOfPassingInput.value.trim() === '') {
                      yearOfPassingInput.classList.add('is-invalid');
                      yearOfPassingValidationMessage.style.display = 'block';
                  } else {
                      yearOfPassingInput.classList.remove('is-invalid');
                      yearOfPassingValidationMessage.style.display = 'none';
                  }
              }
          });

           // <!--for hsc place-->

           var hscplaceInput = document.getElementById('hscplace');
           var hscplaceValidationMessage = document.getElementById('hscplaceValidationMessage');
           var hasInteracted = false;
       
           // Add an event listener to detect when the input field is blurred (loses focus).
           hscplaceInput.addEventListener('blur', function () {
               hasInteracted = true;
       
               if (hscplaceInput.value.trim() === '') {
                   hscplaceInput.classList.add('is-invalid');
                   hscplaceValidationMessage.style.display = 'block';
               } else {
                   hscplaceInput.classList.remove('is-invalid');
                   hscplaceValidationMessage.style.display = 'none';
               }
           });
       
           // Add an event listener to reset the validation state when the user starts typing.
           hscplaceInput.addEventListener('input', function () {
               if (hasInteracted) {
                   if (hscplaceInput.value.trim() === '') {
                       hscplaceInput.classList.add('is-invalid');
                       hscplaceValidationMessage.style.display = 'block';
                   } else {
                       hscplaceInput.classList.remove('is-invalid');
                       hscplaceValidationMessage.style.display = 'none';
                   }
               }
           });

            // <!--for hscuniversity-->

            var hscuniversityInput = document.getElementById('hscuniversity');
            var hscuniversityValidationMessage = document.getElementById('hscuniversityValidationMessage');
            var hasInteracted = false;
        
            // Add an event listener to detect when the input field is blurred (loses focus).
            hscuniversityInput.addEventListener('blur', function () {
                hasInteracted = true;
        
                if (hscuniversityInput.value.trim() === '') {
                    hscuniversityInput.classList.add('is-invalid');
                    hscuniversityValidationMessage.style.display = 'block';
                } else {
                    hscuniversityInput.classList.remove('is-invalid');
                    hscuniversityValidationMessage.style.display = 'none';
                }
            });
        
            // Add an event listener to reset the validation state when the user starts typing.
            hscuniversityInput.addEventListener('input', function () {
                if (hasInteracted) {
                    if (hscuniversityInput.value.trim() === '') {
                        hscuniversityInput.classList.add('is-invalid');
                        hscuniversityValidationMessage.style.display = 'block';
                    } else {
                        hscuniversityInput.classList.remove('is-invalid');
                        hscuniversityValidationMessage.style.display = 'none';
                    }
                }
            });

               // <!--for hsc percentage-->

               var hscpercentageInput = document.getElementById('hscpercentage');
               var hscpercentageValidationMessage = document.getElementById('hscpercentageValidationMessage');
               var hasInteracted = false;
           
               // Add an event listener to detect when the input field is blurred (loses focus).
               hscpercentageInput.addEventListener('blur', function () {
                   hasInteracted = true;
           
                   if (hscpercentageInput.value.trim() === '') {
                       hscpercentageInput.classList.add('is-invalid');
                       hscpercentageValidationMessage.style.display = 'block';
                   } else {
                       hscpercentageInput.classList.remove('is-invalid');
                       hscpercentageValidationMessage.style.display = 'none';
                   }
               });
           
               // Add an event listener to reset the validation state when the user starts typing.
               hscpercentageInput.addEventListener('input', function () {
                   if (hasInteracted) {
                       if (hscpercentageInput.value.trim() === '') {
                           hscpercentageInput.classList.add('is-invalid');
                           hscpercentageValidationMessage.style.display = 'block';
                       } else {
                           hscpercentageInput.classList.remove('is-invalid');
                           hscpercentageValidationMessage.style.display = 'none';
                       }
                   }
               });

                 // <!--for hsc Year of Passing-->

                 var hscyearOfPassingInput = document.getElementById('hscyearOfPassing');
                 var hscyearOfPassingValidationMessage = document.getElementById('hscyearOfPassingValidationMessage');
                 var hasInteracted = false;
             
                 // Add an event listener to detect when the input field is blurred (loses focus).
                 hscyearOfPassingInput.addEventListener('blur', function () {
                     hasInteracted = true;
             
                     if (hscyearOfPassingInput.value.trim() === '') {
                         hscyearOfPassingInput.classList.add('is-invalid');
                         hscyearOfPassingValidationMessage.style.display = 'block';
                     } else {
                         hscyearOfPassingInput.classList.remove('is-invalid');
                         hscyearOfPassingValidationMessage.style.display = 'none';
                     }
                 });
             
                 // Add an event listener to reset the validation state when the user starts typing.
                 hscyearOfPassingInput.addEventListener('input', function () {
                     if (hasInteracted) {
                         if (hscyearOfPassingInput.value.trim() === '') {
                             hscyearOfPassingInput.classList.add('is-invalid');
                             hscyearOfPassingValidationMessage.style.display = 'block';
                         } else {
                             hscyearOfPassingInput.classList.remove('is-invalid');
                             hscyearOfPassingValidationMessage.style.display = 'none';
                         }
                     }
                 });

                  // <!--for graduation institute-->

                  var graduation_instituteNameInput = document.getElementById('graduation_instituteName');
                  var graduation_instituteNameValidationMessage = document.getElementById('graduation_instituteNameValidationMessage');
                  var hasInteracted = false;
              
                  // Add an event listener to detect when the input field is blurred (loses focus).
                  graduation_instituteNameInput.addEventListener('blur', function () {
                      hasInteracted = true;
              
                      if (graduation_instituteNameInput.value.trim() === '') {
                          graduation_instituteNameInput.classList.add('is-invalid');
                          graduation_instituteNameValidationMessage.style.display = 'block';
                      } else {
                          graduation_instituteNameInput.classList.remove('is-invalid');
                          graduation_instituteNameValidationMessage.style.display = 'none';
                      }
                  });
              
                  // Add an event listener to reset the validation state when the user starts typing.
                  graduation_instituteNameInput.addEventListener('input', function () {
                      if (hasInteracted) {
                          if (graduation_instituteNameInput.value.trim() === '') {
                              graduation_instituteNameInput.classList.add('is-invalid');
                              graduation_instituteNameValidationMessage.style.display = 'block';
                          } else {
                              graduation_instituteNameInput.classList.remove('is-invalid');
                              graduation_instituteNameValidationMessage.style.display = 'none';
                          }
                      }
                  });

                    // <!--for graduation place-->

                    var graduationplaceInput = document.getElementById('graduationplace');
                    var graduationplaceValidationMessage = document.getElementById('graduationplaceValidationMessage');
                    var hasInteracted = false;
                
                    // Add an event listener to detect when the input field is blurred (loses focus).
                    graduationplaceInput.addEventListener('blur', function () {
                        hasInteracted = true;
                
                        if (graduationplaceInput.value.trim() === '') {
                            graduationplaceInput.classList.add('is-invalid');
                            graduationplaceValidationMessage.style.display = 'block';
                        } else {
                            graduationplaceInput.classList.remove('is-invalid');
                            graduationplaceValidationMessage.style.display = 'none';
                        }
                    });
                
                    // Add an event listener to reset the validation state when the user starts typing.
                    graduationplaceInput.addEventListener('input', function () {
                        if (hasInteracted) {
                            if (graduationplaceInput.value.trim() === '') {
                                graduationplaceInput.classList.add('is-invalid');
                                graduationplaceValidationMessage.style.display = 'block';
                            } else {
                                graduationplaceInput.classList.remove('is-invalid');
                                graduationplaceValidationMessage.style.display = 'none';
                            }
                        }
                    });

                     // <!--for graduation university-->

                     var graduationuniversityInput = document.getElementById('graduationuniversity');
                     var graduationuniversityValidationMessage = document.getElementById('graduationuniversityValidationMessage');
                     var hasInteracted = false;
                 
                     // Add an event listener to detect when the input field is blurred (loses focus).
                     graduationuniversityInput.addEventListener('blur', function () {
                         hasInteracted = true;
                 
                         if (graduationuniversityInput.value.trim() === '') {
                             graduationuniversityInput.classList.add('is-invalid');
                             graduationuniversityValidationMessage.style.display = 'block';
                         } else {
                             graduationuniversityInput.classList.remove('is-invalid');
                             graduationuniversityValidationMessage.style.display = 'none';
                         }
                     });
                 
                     // Add an event listener to reset the validation state when the user starts typing.
                     graduationuniversityInput.addEventListener('input', function () {
                         if (hasInteracted) {
                             if (graduationuniversityInput.value.trim() === '') {
                                 graduationuniversityInput.classList.add('is-invalid');
                                 graduationuniversityValidationMessage.style.display = 'block';
                             } else {
                                 graduationuniversityInput.classList.remove('is-invalid');
                                 graduationuniversityValidationMessage.style.display = 'none';
                             }
                         }
                     });

                      // <!--for graduation percentage-->

                      var graduationpercentageInput = document.getElementById('graduationpercentage');
                      var graduationpercentageValidationMessage = document.getElementById('graduationpercentageValidationMessage');
                      var hasInteracted = false;
                  
                      // Add an event listener to detect when the input field is blurred (loses focus).
                      graduationpercentageInput.addEventListener('blur', function () {
                          hasInteracted = true;
                  
                          if (graduationpercentageInput.value.trim() === '') {
                              graduationpercentageInput.classList.add('is-invalid');
                              graduationpercentageValidationMessage.style.display = 'block';
                          } else {
                              graduationpercentageInput.classList.remove('is-invalid');
                              graduationpercentageValidationMessage.style.display = 'none';
                          }
                      });
                  
                      // Add an event listener to reset the validation state when the user starts typing.
                      graduationpercentageInput.addEventListener('input', function () {
                          if (hasInteracted) {
                              if (graduationpercentageInput.value.trim() === '') {
                                  graduationpercentageInput.classList.add('is-invalid');
                                  graduationpercentageValidationMessage.style.display = 'block';
                              } else {
                                  graduationpercentageInput.classList.remove('is-invalid');
                                  graduationpercentageValidationMessage.style.display = 'none';
                              }
                          }
                      });

                       // <!--for graduation year of passing-->

                       var graduationyearOfPassingInput = document.getElementById('graduationyearOfPassing');
                       var graduationyearOfPassingValidationMessage = document.getElementById('graduationyearOfPassingValidationMessage');
                       var hasInteracted = false;
                   
                       // Add an event listener to detect when the input field is blurred (loses focus).
                       graduationyearOfPassingInput.addEventListener('blur', function () {
                           hasInteracted = true;
                   
                           if (graduationyearOfPassingInput.value.trim() === '') {
                               graduationyearOfPassingInput.classList.add('is-invalid');
                               graduationyearOfPassingValidationMessage.style.display = 'block';
                           } else {
                               graduationyearOfPassingInput.classList.remove('is-invalid');
                               graduationyearOfPassingValidationMessage.style.display = 'none';
                           }
                       });
                   
                       // Add an event listener to reset the validation state when the user starts typing.
                       graduationyearOfPassingInput.addEventListener('input', function () {
                           if (hasInteracted) {
                               if (graduationyearOfPassingInput.value.trim() === '') {
                                   graduationyearOfPassingInput.classList.add('is-invalid');
                                   graduationyearOfPassingValidationMessage.style.display = 'block';
                               } else {
                                   graduationyearOfPassingInput.classList.remove('is-invalid');
                                   graduationyearOfPassingValidationMessage.style.display = 'none';
                               }
                           }
                       });

                        //  // <!--for post graduation institute-->

                        //  var postgraduation_instituteNameInput = document.getElementById('postgraduation_instituteName');
                        //  var postgraduation_instituteNameValidationMessage = document.getElementById('postgraduation_instituteNameValidationMessage');
                        //  var hasInteracted = false;
                     
                        //  // Add an event listener to detect when the input field is blurred (loses focus).
                        //  postgraduation_instituteNameInput.addEventListener('blur', function () {
                        //      hasInteracted = true;
                     
                        //      if (postgraduation_instituteNameInput.value.trim() === '') {
                        //          postgraduation_instituteNameInput.classList.add('is-invalid');
                        //          postgraduation_instituteNameValidationMessage.style.display = 'block';
                        //      } else {
                        //          postgraduation_instituteNameInput.classList.remove('is-invalid');
                        //          postgraduation_instituteNameValidationMessage.style.display = 'none';
                        //      }
                        //  });
                     
                        //  // Add an event listener to reset the validation state when the user starts typing.
                        //  postgraduation_instituteNameInput.addEventListener('input', function () {
                        //      if (hasInteracted) {
                        //          if (postgraduation_instituteNameInput.value.trim() === '') {
                        //              postgraduation_instituteNameInput.classList.add('is-invalid');
                        //              postgraduation_instituteNameValidationMessage.style.display = 'block';
                        //          } else {
                        //              postgraduation_instituteNameInput.classList.remove('is-invalid');
                        //              postgraduation_instituteNameValidationMessage.style.display = 'none';
                        //          }
                        //      }
                        //  });

                        //    // <!--for post graduation place-->

                        //    var postgradplaceInput = document.getElementById('postgradplace');
                        //    var postgradplaceValidationMessage = document.getElementById('postgradplaceValidationMessage');
                        //    var hasInteracted = false;
                       
                        //    // Add an event listener to detect when the input field is blurred (loses focus).
                        //    postgradplaceInput.addEventListener('blur', function () {
                        //        hasInteracted = true;
                       
                        //        if (postgradplaceInput.value.trim() === '') {
                        //            postgradplaceInput.classList.add('is-invalid');
                        //            postgradplaceValidationMessage.style.display = 'block';
                        //        } else {
                        //            postgradplaceInput.classList.remove('is-invalid');
                        //            postgradplaceValidationMessage.style.display = 'none';
                        //        }
                        //    });
                       
                        //    // Add an event listener to reset the validation state when the user starts typing.
                        //    postgradplaceInput.addEventListener('input', function () {
                        //        if (hasInteracted) {
                        //            if (postgradplaceInput.value.trim() === '') {
                        //                postgradplaceInput.classList.add('is-invalid');
                        //                postgradplaceValidationMessage.style.display = 'block';
                        //            } else {
                        //                postgradplaceInput.classList.remove('is-invalid');
                        //                postgradplaceValidationMessage.style.display = 'none';
                        //            }
                        //        }
                        //    });

                        //     // <!--for post graduation uni-->

                        //     var postgraduniversityInput = document.getElementById('postgraduniversity');
                        //     var postgraduniversityValidationMessage = document.getElementById('postgraduniversityValidationMessage');
                        //     var hasInteracted = false;
                        
                        //     // Add an event listener to detect when the input field is blurred (loses focus).
                        //     postgraduniversityInput.addEventListener('blur', function () {
                        //         hasInteracted = true;
                        
                        //         if (postgraduniversityInput.value.trim() === '') {
                        //             postgraduniversityInput.classList.add('is-invalid');
                        //             postgraduniversityValidationMessage.style.display = 'block';
                        //         } else {
                        //             postgraduniversityInput.classList.remove('is-invalid');
                        //             postgraduniversityValidationMessage.style.display = 'none';
                        //         }
                        //     });
                        
                        //     // Add an event listener to reset the validation state when the user starts typing.
                        //     postgraduniversityInput.addEventListener('input', function () {
                        //         if (hasInteracted) {
                        //             if (postgraduniversityInput.value.trim() === '') {
                        //                 postgraduniversityInput.classList.add('is-invalid');
                        //                 postgraduniversityValidationMessage.style.display = 'block';
                        //             } else {
                        //                 postgraduniversityInput.classList.remove('is-invalid');
                        //                 postgraduniversityValidationMessage.style.display = 'none';
                        //             }
                        //         }
                        //     });

                        //      // <!--for post graduation percent-->

                        //      var postgradpercentageInput = document.getElementById('postgradpercentage');
                        //      var postgradpercentageValidationMessage = document.getElementById('postgradpercentageValidationMessage');
                        //      var hasInteracted = false;
                         
                        //      // Add an event listener to detect when the input field is blurred (loses focus).
                        //      postgradpercentageInput.addEventListener('blur', function () {
                        //          hasInteracted = true;
                         
                        //          if (postgradpercentageInput.value.trim() === '') {
                        //              postgradpercentageInput.classList.add('is-invalid');
                        //              postgradpercentageValidationMessage.style.display = 'block';
                        //          } else {
                        //              postgradpercentageInput.classList.remove('is-invalid');
                        //              postgradpercentageValidationMessage.style.display = 'none';
                        //          }
                        //      });
                         
                        //      // Add an event listener to reset the validation state when the user starts typing.
                        //      postgradpercentageInput.addEventListener('input', function () {
                        //          if (hasInteracted) {
                        //              if (postgradpercentageInput.value.trim() === '') {
                        //                  postgradpercentageInput.classList.add('is-invalid');
                        //                  postgradpercentageValidationMessage.style.display = 'block';
                        //              } else {
                        //                  postgradpercentageInput.classList.remove('is-invalid');
                        //                  postgradpercentageValidationMessage.style.display = 'none';
                        //              }
                        //          }
                        //      });

                        //       // <!--for post graduation year-->

                        //       var postgradyearOfPassingInput = document.getElementById('postgradyearOfPassing');
                        //       var postgradyearOfPassingValidationMessage = document.getElementById('postgradyearOfPassingValidationMessage');
                        //       var hasInteracted = false;
                          
                        //       // Add an event listener to detect when the input field is blurred (loses focus).
                        //       postgradyearOfPassingInput.addEventListener('blur', function () {
                        //           hasInteracted = true;
                          
                        //           if (postgradyearOfPassingInput.value.trim() === '') {
                        //               postgradyearOfPassingInput.classList.add('is-invalid');
                        //               postgradyearOfPassingValidationMessage.style.display = 'block';
                        //           } else {
                        //               postgradyearOfPassingInput.classList.remove('is-invalid');
                        //               postgradyearOfPassingValidationMessage.style.display = 'none';
                        //           }
                        //       });
                          
                        //       // Add an event listener to reset the validation state when the user starts typing.
                        //       postgradyearOfPassingInput.addEventListener('input', function () {
                        //           if (hasInteracted) {
                        //               if (postgradyearOfPassingInput.value.trim() === '') {
                        //                   postgradyearOfPassingInput.classList.add('is-invalid');
                        //                   postgradyearOfPassingValidationMessage.style.display = 'block';
                        //               } else {
                        //                   postgradyearOfPassingInput.classList.remove('is-invalid');
                        //                   postgradyearOfPassingValidationMessage.style.display = 'none';
                        //               }
                        //           }
                        //       });

                        //         // <!--for activity-->

                        //         var achievement_textInput = document.getElementById('achievement_text');
                        //         var achievement_textValidationMessage = document.getElementById('achievement_textValidationMessage');
                        //         var hasInteracted = false;
                            
                        //         // Add an event listener to detect when the input field is blurred (loses focus).
                        //         achievement_textInput.addEventListener('blur', function () {
                        //             hasInteracted = true;
                            
                        //             if (achievement_textInput.value.trim() === '') {
                        //                 achievement_textInput.classList.add('is-invalid');
                        //                 achievement_textValidationMessage.style.display = 'block';
                        //             } else {
                        //                 achievement_textInput.classList.remove('is-invalid');
                        //                 achievement_textValidationMessage.style.display = 'none';
                        //             }
                        //         });
                            
                        //         // Add an event listener to reset the validation state when the user starts typing.
                        //         achievement_textInput.addEventListener('input', function () {
                        //             if (hasInteracted) {
                        //                 if (achievement_textInput.value.trim() === '') {
                        //                     achievement_textInput.classList.add('is-invalid');
                        //                     achievement_textValidationMessage.style.display = 'block';
                        //                 } else {
                        //                     achievement_textInput.classList.remove('is-invalid');
                        //                     achievement_textValidationMessage.style.display = 'none';
                        //                 }
                        //             }
                        //         });

                        //          // <!--for achievement-->

                        //          var activity_textInput = document.getElementById('activity_text');
                        //          var activity_textValidationMessage = document.getElementById('activity_textValidationMessage');
                        //          var hasInteracted = false;
                             
                        //          // Add an event listener to detect when the input field is blurred (loses focus).
                        //          activity_textInput.addEventListener('blur', function () {
                        //              hasInteracted = true;
                             
                        //              if (activity_textInput.value.trim() === '') {
                        //                  activity_textInput.classList.add('is-invalid');
                        //                  activity_textValidationMessage.style.display = 'block';
                        //              } else {
                        //                  activity_textInput.classList.remove('is-invalid');
                        //                  activity_textValidationMessage.style.display = 'none';
                        //              }
                        //          });
                             
                        //          // Add an event listener to reset the validation state when the user starts typing.
                        //          activity_textInput.addEventListener('input', function () {
                        //              if (hasInteracted) {
                        //                  if (activity_textInput.value.trim() === '') {
                        //                      activity_textInput.classList.add('is-invalid');
                        //                      activity_textValidationMessage.style.display = 'block';
                        //                  } else {
                        //                      activity_textInput.classList.remove('is-invalid');
                        //                      activity_textValidationMessage.style.display = 'none';
                        //                  }
                        //              }
                        //          });

                        //           // <!--for hobbies-->

                        //           var hobbies_interests_textInput = document.getElementById('hobbies_interests_text');
                        //           var hobbies_interests_textValidationMessage = document.getElementById('hobbies_interests_textValidationMessage');
                        //           var hasInteracted = false;
                              
                        //           // Add an event listener to detect when the input field is blurred (loses focus).
                        //           hobbies_interests_textInput.addEventListener('blur', function () {
                        //               hasInteracted = true;
                              
                        //               if (hobbies_interests_textInput.value.trim() === '') {
                        //                   hobbies_interests_textInput.classList.add('is-invalid');
                        //                   hobbies_interests_textValidationMessage.style.display = 'block';
                        //               } else {
                        //                   hobbies_interests_textInput.classList.remove('is-invalid');
                        //                   hobbies_interests_textValidationMessage.style.display = 'none';
                        //               }
                        //           });
                              
                        //           // Add an event listener to reset the validation state when the user starts typing.
                        //           hobbies_interests_textInput.addEventListener('input', function () {
                        //               if (hasInteracted) {
                        //                   if (hobbies_interests_textInput.value.trim() === '') {
                        //                       hobbies_interests_textInput.classList.add('is-invalid');
                        //                       hobbies_interests_textValidationMessage.style.display = 'block';
                        //                   } else {
                        //                       hobbies_interests_textInput.classList.remove('is-invalid');
                        //                       hobbies_interests_textValidationMessage.style.display = 'none';
                        //                   }
                        //               }
                        //           });

                                   // <!--for first ref-->

                                   var familyNameInput = document.getElementById('familyName');
                                   var familyNameValidationMessage = document.getElementById('familyNameValidationMessage');
                                   var hasInteracted = false;
                               
                                   // Add an event listener to detect when the input field is blurred (loses focus).
                                   familyNameInput.addEventListener('blur', function () {
                                       hasInteracted = true;
                               
                                       if (familyNameInput.value.trim() === '') {
                                           familyNameInput.classList.add('is-invalid');
                                           familyNameValidationMessage.style.display = 'block';
                                       } else {
                                           familyNameInput.classList.remove('is-invalid');
                                           familyNameValidationMessage.style.display = 'none';
                                       }
                                   });
                               
                                   // Add an event listener to reset the validation state when the user starts typing.
                                   familyNameInput.addEventListener('input', function () {
                                       if (hasInteracted) {
                                           if (familyNameInput.value.trim() === '') {
                                               familyNameInput.classList.add('is-invalid');
                                               familyNameValidationMessage.style.display = 'block';
                                           } else {
                                               familyNameInput.classList.remove('is-invalid');
                                               familyNameValidationMessage.style.display = 'none';
                                           }
                                       }
                                   });

                                    // <!--for first ref relation-->

                                    var familyRelationInput = document.getElementById('familyRelation');
                                    var familyRelationValidationMessage = document.getElementById('familyRelationValidationMessage');
                                    var hasInteracted = false;
                                
                                    // Add an event listener to detect when the input field is blurred (loses focus).
                                    familyRelationInput.addEventListener('blur', function () {
                                        hasInteracted = true;
                                
                                        if (familyRelationInput.value.trim() === '') {
                                            familyRelationInput.classList.add('is-invalid');
                                            familyRelationValidationMessage.style.display = 'block';
                                        } else {
                                            familyRelationInput.classList.remove('is-invalid');
                                            familyRelationValidationMessage.style.display = 'none';
                                        }
                                    });
                                
                                    // Add an event listener to reset the validation state when the user starts typing.
                                    familyRelationInput.addEventListener('input', function () {
                                        if (hasInteracted) {
                                            if (familyRelationInput.value.trim() === '') {
                                                familyRelationInput.classList.add('is-invalid');
                                                familyRelationValidationMessage.style.display = 'block';
                                            } else {
                                                familyRelationInput.classList.remove('is-invalid');
                                                familyRelationValidationMessage.style.display = 'none';
                                            }
                                        }
                                    });

                                     // <!--for first ref mobile-->

                                     var familyPhoneInput = document.getElementById('familyPhone');
                                     var familyPhoneValidationMessage = document.getElementById('familyPhoneValidationMessage');
                                     var hasInteracted = false;
                                 
                                     // Add an event listener to detect when the input field is blurred (loses focus).
                                     familyPhoneInput.addEventListener('blur', function () {
                                         hasInteracted = true;
                                 
                                         if (familyPhoneInput.value.trim() === '') {
                                             familyPhoneInput.classList.add('is-invalid');
                                             familyPhoneValidationMessage.style.display = 'block';
                                         } else {
                                             familyPhoneInput.classList.remove('is-invalid');
                                             familyPhoneValidationMessage.style.display = 'none';
                                         }
                                     });
                                 
                                     // Add an event listener to reset the validation state when the user starts typing.
                                     familyPhoneInput.addEventListener('input', function () {
                                         if (hasInteracted) {
                                             if (familyPhoneInput.value.trim() === '') {
                                                 familyPhoneInput.classList.add('is-invalid');
                                                 familyPhoneValidationMessage.style.display = 'block';
                                             } else {
                                                 familyPhoneInput.classList.remove('is-invalid');
                                                 familyPhoneValidationMessage.style.display = 'none';
                                             }
                                         }
                                     });

                                      // <!--for first ref add-->

                                      var familyAddressInput = document.getElementById('familyAddress');
                                      var familyAddressValidationMessage = document.getElementById('familyAddressValidationMessage');
                                      var hasInteracted = false;
                                  
                                      // Add an event listener to detect when the input field is blurred (loses focus).
                                      familyAddressInput.addEventListener('blur', function () {
                                          hasInteracted = true;
                                  
                                          if (familyAddressInput.value.trim() === '') {
                                              familyAddressInput.classList.add('is-invalid');
                                              familyAddressValidationMessage.style.display = 'block';
                                          } else {
                                              familyAddressInput.classList.remove('is-invalid');
                                              familyAddressValidationMessage.style.display = 'none';
                                          }
                                      });
                                  
                                      // Add an event listener to reset the validation state when the user starts typing.
                                      familyAddressInput.addEventListener('input', function () {
                                          if (hasInteracted) {
                                              if (familyAddressInput.value.trim() === '') {
                                                  familyAddressInput.classList.add('is-invalid');
                                                  familyAddressValidationMessage.style.display = 'block';
                                              } else {
                                                  familyAddressInput.classList.remove('is-invalid');
                                                  familyAddressValidationMessage.style.display = 'none';
                                              }
                                          }
                                      });

                                       // <!--for sec ref name-->

                                       var secondNameInput = document.getElementById('secondName');
                                       var secondNameValidationMessage = document.getElementById('secondNameValidationMessage');
                                       var hasInteracted = false;
                                   
                                       // Add an event listener to detect when the input field is blurred (loses focus).
                                       secondNameInput.addEventListener('blur', function () {
                                           hasInteracted = true;
                                   
                                           if (secondNameInput.value.trim() === '') {
                                               secondNameInput.classList.add('is-invalid');
                                               secondNameValidationMessage.style.display = 'block';
                                           } else {
                                               secondNameInput.classList.remove('is-invalid');
                                               secondNameValidationMessage.style.display = 'none';
                                           }
                                       });
                                   
                                       // Add an event listener to reset the validation state when the user starts typing.
                                       secondNameInput.addEventListener('input', function () {
                                           if (hasInteracted) {
                                               if (secondNameInput.value.trim() === '') {
                                                   secondNameInput.classList.add('is-invalid');
                                                   secondNameValidationMessage.style.display = 'block';
                                               } else {
                                                   secondNameInput.classList.remove('is-invalid');
                                                   secondNameValidationMessage.style.display = 'none';
                                               }
                                           }
                                       });

                                        // <!--for sec ref relation-->

                                        var secondRelationInput = document.getElementById('secondRelation');
                                        var secondRelationValidationMessage = document.getElementById('secondRelationValidationMessage');
                                        var hasInteracted = false;
                                    
                                        // Add an event listener to detect when the input field is blurred (loses focus).
                                        secondRelationInput.addEventListener('blur', function () {
                                            hasInteracted = true;
                                    
                                            if (secondRelationInput.value.trim() === '') {
                                                secondRelationInput.classList.add('is-invalid');
                                                secondRelationValidationMessage.style.display = 'block';
                                            } else {
                                                secondRelationInput.classList.remove('is-invalid');
                                                secondRelationValidationMessage.style.display = 'none';
                                            }
                                        });
                                    
                                        // Add an event listener to reset the validation state when the user starts typing.
                                        secondRelationInput.addEventListener('input', function () {
                                            if (hasInteracted) {
                                                if (secondRelationInput.value.trim() === '') {
                                                    secondRelationInput.classList.add('is-invalid');
                                                    secondRelationValidationMessage.style.display = 'block';
                                                } else {
                                                    secondRelationInput.classList.remove('is-invalid');
                                                    secondRelationValidationMessage.style.display = 'none';
                                                }
                                            }
                                        });

                                        // <!--for sec ref mob-->

                                        var secondPhoneInput = document.getElementById('secondPhone');
                                        var secondPhoneValidationMessage = document.getElementById('secondPhoneValidationMessage');
                                        var hasInteracted = false;
                                    
                                        // Add an event listener to detect when the input field is blurred (loses focus).
                                        secondPhoneInput.addEventListener('blur', function () {
                                            hasInteracted = true;
                                    
                                            if (secondPhoneInput.value.trim() === '') {
                                                secondPhoneInput.classList.add('is-invalid');
                                                secondPhoneValidationMessage.style.display = 'block';
                                            } else {
                                                secondPhoneInput.classList.remove('is-invalid');
                                                secondPhoneValidationMessage.style.display = 'none';
                                            }
                                        });
                                    
                                        // Add an event listener to reset the validation state when the user starts typing.
                                        secondPhoneInput.addEventListener('input', function () {
                                            if (hasInteracted) {
                                                if (secondPhoneInput.value.trim() === '') {
                                                    secondPhoneInput.classList.add('is-invalid');
                                                    secondPhoneValidationMessage.style.display = 'block';
                                                } else {
                                                    secondPhoneInput.classList.remove('is-invalid');
                                                    secondPhoneValidationMessage.style.display = 'none';
                                                }
                                            }
                                        });

                                         // <!--for sec ref add-->

                                         var secondAddressInput = document.getElementById('secondAddress');
                                         var secondAddressValidationMessage = document.getElementById('secondAddressValidationMessage');
                                         var hasInteracted = false;
                                     
                                         // Add an event listener to detect when the input field is blurred (loses focus).
                                         secondAddressInput.addEventListener('blur', function () {
                                             hasInteracted = true;
                                     
                                             if (secondAddressInput.value.trim() === '') {
                                                 secondAddressInput.classList.add('is-invalid');
                                                 secondAddressValidationMessage.style.display = 'block';
                                             } else {
                                                 secondAddressInput.classList.remove('is-invalid');
                                                 secondAddressValidationMessage.style.display = 'none';
                                             }
                                         });
                                     
                                         // Add an event listener to reset the validation state when the user starts typing.
                                         secondAddressInput.addEventListener('input', function () {
                                             if (hasInteracted) {
                                                 if (secondAddressInput.value.trim() === '') {
                                                     secondAddressInput.classList.add('is-invalid');
                                                     secondAddressValidationMessage.style.display = 'block';
                                                 } else {
                                                     secondAddressInput.classList.remove('is-invalid');
                                                     secondAddressValidationMessage.style.display = 'none';
                                                 }
                                             }
                                         });

                                           // <!--for samount to be paid-->

                                           var enrollmentFeeInput = document.getElementById('enrollmentFee');
                                           var enrollmentFeeValidationMessage = document.getElementById('enrollmentFeeValidationMessage');
                                           var hasInteracted = false;
                                       
                                           // Add an event listener to detect when the input field is blurred (loses focus).
                                           enrollmentFeeInput.addEventListener('blur', function () {
                                               hasInteracted = true;
                                       
                                               if (enrollmentFeeInput.value.trim() === '') {
                                                   enrollmentFeeInput.classList.add('is-invalid');
                                                   enrollmentFeeValidationMessage.style.display = 'block';
                                               } else {
                                                   enrollmentFeeInput.classList.remove('is-invalid');
                                                   enrollmentFeeValidationMessage.style.display = 'none';
                                               }
                                           });
                                       
                                           // Add an event listener to reset the validation state when the user starts typing.
                                           enrollmentFeeInput.addEventListener('input', function () {
                                               if (hasInteracted) {
                                                   if (enrollmentFeeInput.value.trim() === '') {
                                                       enrollmentFeeInput.classList.add('is-invalid');
                                                       enrollmentFeeValidationMessage.style.display = 'block';
                                                   } else {
                                                       enrollmentFeeInput.classList.remove('is-invalid');
                                                       enrollmentFeeValidationMessage.style.display = 'none';
                                                   }
                                               }
                                           });


                                          //agrre checkbox
                                          function validateForm() {
                                            var agreeCheckbox = document.getElementById("agreeCheckbox");
                                            var checkboxValidationMessage = document.getElementById("checkboxValidationMessage");
                                      
                                            if (!agreeCheckbox.checked) {
                                               // Checkbox is not checked
                                               checkboxValidationMessage.style.display = "block";
                                               return false; // Prevent form submission
                                            }
                                      
                                            // If the checkbox is checked, hide the validation message
                                            checkboxValidationMessage.style.display = "none";
                                            return true; // Allow form submission
                                         }

                                            // // <!--for emi 1 amount-->

                                            // var selectedDateInput = document.getElementById('selectedDate');
                                            // var selectedDateValidationMessage = document.getElementById('selectedDateValidationMessage');
                                            // var hasInteracted = false;
                                        
                                            // // Add an event listener to detect when the input field is blurred (loses focus).
                                            // selectedDateInput.addEventListener('blur', function () {
                                            //     hasInteracted = true;
                                        
                                            //     if (selectedDateInput.value.trim() === '') {
                                            //         selectedDateInput.classList.add('is-invalid');
                                            //         selectedDateValidationMessage.style.display = 'block';
                                            //     } else {
                                            //         selectedDateInput.classList.remove('is-invalid');
                                            //         selectedDateValidationMessage.style.display = 'none';
                                            //     }
                                            // });
                                        
                                            // Add an event listener to reset the validation state when the user starts typing.
                                            // selectedDateInput.addEventListener('input', function () {
                                            //     if (hasInteracted) {
                                            //         if (selectedDateInput.value.trim() === '') {
                                            //             selectedDateInput.classList.add('is-invalid');
                                            //             selectedDateValidationMessage.style.display = 'block';
                                            //         } else {
                                            //             selectedDateInput.classList.remove('is-invalid');
                                            //             selectedDateValidationMessage.style.display = 'none';
                                            //         }
                                            //     }
                                            // });

                                             // <!--for emi 1 amount-->

                                            //  var AmountInput = document.getElementById('Amount');
                                            //  var AmountValidationMessage = document.getElementById('AmountValidationMessage');
                                            //  var hasInteracted = false;
                                         
                                            //  // Add an event listener to detect when the input field is blurred (loses focus).
                                            //  AmountInput.addEventListener('blur', function () {
                                            //      hasInteracted = true;
                                         
                                            //      if (AmountInput.value.trim() === '') {
                                            //          AmountInput.classList.add('is-invalid');
                                            //          AmountValidationMessage.style.display = 'block';
                                            //      } else {
                                            //          AmountInput.classList.remove('is-invalid');
                                            //          AmountValidationMessage.style.display = 'none';
                                            //      }
                                            //  });
                                         
                                             // Add an event listener to reset the validation state when the user starts typing.
                                            //  AmountInput.addEventListener('input', function () {
                                            //      if (hasInteracted) {
                                            //          if (AmountInput.value.trim() === '') {
                                            //              AmountInput.classList.add('is-invalid');
                                            //              AmountValidationMessage.style.display = 'block';
                                            //          } else {
                                            //              AmountInput.classList.remove('is-invalid');
                                            //              AmountValidationMessage.style.display = 'none';
                                            //          }
                                            //      }
                                            //  });


                                            //  //emi 2 date
                                            //  var dateSecondEmiInput = document.getElementById('dateSecondEmi');
                                            //  var dateSecondEmiValidationMessage = document.getElementById('dateSecondEmiValidationMessage');
                                            //  var hasInteracted = false;
                                         
                                            //  // Add an event listener to detect when the input field is blurred (loses focus).
                                            //  dateSecondEmiInput.addEventListener('blur', function () {
                                            //      hasInteracted = true;
                                         
                                            //      if (dateSecondEmiInput.value.trim() === '') {
                                            //          dateSecondEmiInput.classList.add('is-invalid');
                                            //          dateSecondEmiValidationMessage.style.display = 'block';
                                            //      } else {
                                            //          dateSecondEmiInput.classList.remove('is-invalid');
                                            //          dateSecondEmiValidationMessage.style.display = 'none';
                                            //      }
                                            //  });
                                         
                                             // Add an event listener to reset the validation state when the user starts typing.
                                            //  dateSecondEmiInput.addEventListener('input', function () {
                                            //      if (hasInteracted) {
                                            //          if (dateSecondEmiInput.value.trim() === '') {
                                            //              dateSecondEmiInput.classList.add('is-invalid');
                                            //              dateSecondEmiValidationMessage.style.display = 'block';
                                            //          } else {
                                            //              dateSecondEmiInput.classList.remove('is-invalid');
                                            //              dateSecondEmiValidationMessage.style.display = 'none';
                                            //          }
                                            //      }
                                            //  });

                                            //    //emi 2 amount
                                            //    var emi2AmountInput = document.getElementById('emi2Amount');
                                            //    var emi2AmountValidationMessage = document.getElementById('emi2AmountValidationMessage');
                                            //    var hasInteracted = false;
                                           
                                            //    // Add an event listener to detect when the input field is blurred (loses focus).
                                            //    emi2AmountInput.addEventListener('blur', function () {
                                            //        hasInteracted = true;
                                           
                                            //        if (emi2AmountInput.value.trim() === '') {
                                            //            emi2AmountInput.classList.add('is-invalid');
                                            //            emi2AmountValidationMessage.style.display = 'block';
                                            //        } else {
                                            //            emi2AmountInput.classList.remove('is-invalid');
                                            //            emi2AmountValidationMessage.style.display = 'none';
                                            //        }
                                            //    });
                                           
                                            //    // Add an event listener to reset the validation state when the user starts typing.
                                            //    emi2AmountInput.addEventListener('input', function () {
                                            //        if (hasInteracted) {
                                            //            if (emi2AmountInput.value.trim() === '') {
                                            //                emi2AmountInput.classList.add('is-invalid');
                                            //                emi2AmountValidationMessage.style.display = 'block';
                                            //            } else {
                                            //                emi2AmountInput.classList.remove('is-invalid');
                                            //                emi2AmountValidationMessage.style.display = 'none';
                                            //            }
                                            //        }
                                            //    });

                                            //    //emi 2 date
                                            //    var dateThirdEmiInput = document.getElementById('dateThirdEmi');
                                            //    var dateThirdEmiValidationMessage = document.getElementById('dateThirdEmiValidationMessage');
                                            //    var hasInteracted = false;
                                           
                                            //    // Add an event listener to detect when the input field is blurred (loses focus).
                                            //    dateThirdEmiInput.addEventListener('blur', function () {
                                            //        hasInteracted = true;
                                           
                                            //        if (dateThirdEmiInput.value.trim() === '') {
                                            //            dateThirdEmiInput.classList.add('is-invalid');
                                            //            dateThirdEmiValidationMessage.style.display = 'block';
                                            //        } else {
                                            //            dateThirdEmiInput.classList.remove('is-invalid');
                                            //            dateThirdEmiValidationMessage.style.display = 'none';
                                            //        }
                                            //    });
                                           
                                            //    // Add an event listener to reset the validation state when the user starts typing.
                                            //    dateThirdEmiInput.addEventListener('input', function () {
                                            //        if (hasInteracted) {
                                            //            if (dateThirdEmiInput.value.trim() === '') {
                                            //                dateThirdEmiInput.classList.add('is-invalid');
                                            //                dateThirdEmiValidationMessage.style.display = 'block';
                                            //            } else {
                                            //                dateThirdEmiInput.classList.remove('is-invalid');
                                            //                dateThirdEmiValidationMessage.style.display = 'none';
                                            //            }
                                            //        }
                                            //    });

                                            //     //emi 2 amount
                                            //     var emi3AmountInput = document.getElementById('emi3Amount');
                                            //     var emi3AmountValidationMessage = document.getElementById('emi3AmountValidationMessage');
                                            //     var hasInteracted = false;
                                            
                                            //     // Add an event listener to detect when the input field is blurred (loses focus).
                                            //     emi3AmountInput.addEventListener('blur', function () {
                                            //         hasInteracted = true;
                                            
                                            //         if (emi3AmountInput.value.trim() === '') {
                                            //             emi3AmountInput.classList.add('is-invalid');
                                            //             emi3AmountValidationMessage.style.display = 'block';
                                            //         } else {
                                            //             emi3AmountInput.classList.remove('is-invalid');
                                            //             emi3AmountValidationMessage.style.display = 'none';
                                            //         }
                                            //     });
                                            
                                            //     // Add an event listener to reset the validation state when the user starts typing.
                                            //     emi3AmountInput.addEventListener('input', function () {
                                            //         if (hasInteracted) {
                                            //             if (emi3AmountInput.value.trim() === '') {
                                            //                 emi3AmountInput.classList.add('is-invalid');
                                            //                 emi3AmountValidationMessage.style.display = 'block';
                                            //             } else {
                                            //                 emi3AmountInput.classList.remove('is-invalid');
                                            //                 emi3AmountValidationMessage.style.display = 'none';
                                            //             }
                                            //         }
                                            //     });