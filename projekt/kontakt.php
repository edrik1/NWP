<?php 
	print '

	<!-- Contact Section -->
<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3>FAQ</h3>
    </div>
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Zašto odabrati naše zdravstvene usluge 
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            U koje vrijeme možete doći na konzultacije?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Koliko je moguće primiti posjetitelja po preporukama Stožera?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent
                        heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
    <div class="section-title">
        <h3>Ugovori
            <span>sastanak</span>
        </h3>
    </div>
    <form name="contact_form" class="default-form contact-form" action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Ime" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Usluga smještaja</option>
                        <option>Dijagnostika</option>
                        <option>Psihijatrija</option>
                    </select>
                </div>               
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                
                <div class="form-group">
                    <input type="text" name="Phone" placeholder="Telefon" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="Date" placeholder="Datum" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Liječnik</option>
                        <option>Dijagnostičar</option>
                        <option>Psihijatar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="country">Država</label>
                    <select id="country" name="country">
                        <option value="">Please select</option>
                        <option value="BE">Belgium</option>
                        <option value="HR" selected>Croatia</option>
                        <option value="LU">Luxembourg</option>
                        <option value="HU">Hungary</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <textarea name="form_message" placeholder="Vaša poruka" required=""></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">pošalji</button>
                </div>
            </div>            
        </div>
    </form>
</div>                        
            </div>
        </div>                    
    </div>        
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <iframe width="700" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=700&cp=45.906606662509816~15.859120998412708&lvl=13&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
            </iframe>
            <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
               <a id="largeMapLink" href="https://www.bing.com/maps?cp=45.906606662509816~15.859120998412708&amp;sty=r&amp;lvl=13&amp;FORM=MBEDLD" target="_blank">Prikaži veću kartu</a> &nbsp; | &nbsp;
               <a id="dirMapLink" href="https://www.bing.com/maps/directions?cp=45.906606662509816~15.859120998412708&amp;sty=r&amp;lvl=13&amp;rtp=~pos.45.906606662509816_15.859120998412708____&amp;FORM=MBEDLD" target="_blank">Traži upute</a>
           </div>
        </div>
        <div class="col-sm-2">
        </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
	</div>';

	
?>