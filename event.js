    if(window.location.href.indexOf("cryptex")>-1){
            window.location = "https://cryptex.nvision.org.in/";
    }

    if(window.location.href.indexOf("paper")>-1){
            window.location = "https://nvision.org.in/paperpresentation";
    }



$(document).ready(function () {

        $("#gotFanatic").click(function () {
        alert("Game Of Thrones Fanatic Has ended.");
    })


            $(".elanejungButton").click(function () {
            if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
            if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }
                if(events.indexOf('elanejung')==-1){
                $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'elanejung'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Elan E Jung');
                            $('.elanejungButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
            }
       else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'elanejung'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Elan E Jung');
                            $('.elanejungButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }     
        });

                        $(".walk_the_rampButton").click(function () {
            if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
            if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }
                if(events.indexOf('walk_the_ramp')==-1){
                $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'walk_the_ramp'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Walk The Ramp');
                            $('.walk_the_rampButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
            }
       else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'walk_the_ramp'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Walk The Ramp');
                            $('.walk_the_rampButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }     
        });

            


                    $(".manthanButton").click(function () {
            if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
            if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }
                if(events.indexOf('manthan')==-1){
                $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'manthan'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Manthan');
                            $('.manthanButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
            }
       else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'manthan'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Manthan');
                            $('.manthanButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }     
        });



                            $(".breakfreeButton").click(function () {
            if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
            if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }
                if(events.indexOf('breakfree')==-1){
                $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'breakfree'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Break Free');
                            $('.breakfreeButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
            }
       else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'breakfree'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Break Free');
                            $('.breakfreeButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }     
        });


                                $('body').on("click", ".looseyourfeetButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('looseyourfeet')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'looseyourfeet'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Loose Your Feet');
                            $('.looseyourfeetButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'looseyourfeet'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Loose Your Feet');
                            $('.looseyourfeetButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });

                                    $('body').on("click", ".nrityanjaliButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('nrityanjali')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'nrityanjali'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Nrityanjali');
                                $('.nrityanjaliButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'nrityanjali'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Nrityanjali');
                                $('.nrityanjaliButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

                                    $('body').on("click", ".just_duetButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('just_duet')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'just_duet'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Just Duet');
                            $('.just_duetButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'just_duet'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Just Duet');
                            $('.just_duetButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


                                    $('body').on("click", ".vibrazioneButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('vibrazione')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'vibrazione'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Vibrazione');
                            $('.vibrazioneButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'vibrazione'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Vibrazione');
                            $('.vibrazioneButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });

                                    $('body').on("click", ".octavesButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('octaves')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'octaves'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Octaves');
                            $('.octavesButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'octaves'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Octaves');
                            $('.octavesButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });



                                        $('body').on("click", ".andaazapnapnaButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('andaazapnapna')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'andaazapnapna'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Andaaz Apna Apna');
                                $('.andaazapnapnaButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'andaazapnapna'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Andaaz Apna Apna');
                                $('.andaazapnapnaButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

                                            $('body').on("click", ".nukkadnatakButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('nukkadnatak')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'nukkadnatak'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Nukkad Natak');
                                $('.nukkadnatakButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'nukkadnatak'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Nukkad Natak');
                                $('.nukkadnatakButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


                                                $('body').on("click", ".filmfarefiestaButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('filmfarefiesta')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'filmfarefiesta'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Film Fare Fiesta');
                                $('.filmfarefiestaButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'filmfarefiesta'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from  Film Fare Fiesta');
                                $('.filmfarefiestaButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


                                                    $('body').on("click", ".picelecticButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('picelectic')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'picelectic'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Picelectic');
                                $('.picelecticButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'picelectic'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Picelectic');
                                $('.picelecticButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


                                                        $('body').on("click", ".lightscameraButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('lightscamera')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'lightscamera'}, function(result){
                if(result!="failure"){
                                Alert('successfully Registered for Lights Camera Elan');
                                $('.lightscameraButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'lightscamera'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Lights Camera Elan');
                                $('.lightscameraButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


    $('body').on("click", ".facepaintingButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('facepainting')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'facepainting'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Face Painting');
                                $('.facepaintingButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'facepainting'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Face Painting');
                                $('.facepaintingButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

        $('body').on("click", ".nailartButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('nailart')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'nailart'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Nail Art');
                                $('.nailartButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'nailart'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Nail Art');
                                $('.nailartButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


    $('body').on("click", ".mehendiButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('mehendi')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'mehendi'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Mehendi');
                                $('.mehendiButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'mehendi'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Mehendi');
                                $('.mehendiButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

        $('body').on("click", ".claymodellingButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('claymodelling')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'claymodelling'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Clay Modelling');
                                $('.claymodellingButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'claymodelling'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Clay Modelling');
                                $('.claymodellingButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


            $('body').on("click", ".artexhibitionButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('artexhibition')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'artexhibition'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Art Exhibition');
                                $('.artexhibitionButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'artexhibition'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Art Exhibition');
                                $('.artexhibitionButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });



    $('body').on("click", ".djwars", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('djwars'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#djwars');
    });

    // Event registration of djwars starts

    $('body').on("click", ".djwarsButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('djwars')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'djwars'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for DJ Wars');
                                $('.djwarsButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'djwars'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from DJ Wars');
                                $('.djwarsButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


    // Event registration of rjhunt starts
    $('body').on("click", ".rjhuntButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('rjhunt')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'rjhunt'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for RJ Hunt');
                                $('.rjhuntButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'rjhunt'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from RJ Hunt');
                                $('.rjhuntButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });


        // Event registration of lendmeurvoice starts
    $('body').on("click", ".lendmeurvoiceButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('lendmeurvoice')==-1){
            $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'lendmeurvoice'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Lend Me Your Voice');
                                $('.lendmeurvoiceButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'lendmeurvoice'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Lend Me Your Voice');
                                $('.lendmeurvoiceButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });




    $('body').on("click", ".campus_princessButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('campus_princess')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'campus_princess'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Campus Princess');
                            $('.campus_princessButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'campus_princess'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Campus Princess');
                            $('.campus_princessButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });

    



$('body').on("click", ".mrdetectiveButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('mrdetective')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'mrdetective'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Mr Detective');
                            $('.mrdetectiveButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'mrdetective'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Mr Detective');
                            $('.mrdetectiveButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


$('body').on("click", ".wheel_of_fortuneButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('wheel_of_fortune')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'wheel_of_fortune'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Wheel Of Fortune');
                            $('.wheel_of_fortuneButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'wheel_of_fortune'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Wheel Of Fortune');
                            $('.wheel_of_fortuneButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


$('body').on("click", ".quizzesButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('quizzes')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'quizzes'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Quizzes');
                            $('.quizzesButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'quizzes'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Quizzes');
                            $('.quizzesButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


    $('body').on("click", ".jamButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('jam')==-1){
        $.post("registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'jam'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Just A Minute');
                            $('.jamButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'jam'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Just A Minute');
                            $('.jamButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


})