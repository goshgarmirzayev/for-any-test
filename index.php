<script src="${resource(dir: 'js', file: 'jquery-1.11.3.min.js')}"></script>
<script type="text/javascript" src="${resource(dir: 'assets/js/core/libraries', file: 'bootstrap.min.js')}"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="mobile-option-nav"> 
			<div class="mobile-option-nav-item">
                    <div>
                      
                            <i>
                                <img
                                        src="speed.png"/>
                            </i>

                       
                    </div>
                </div>

            

            <div class="mobile-option-nav-item">
                <div class="">
                    
                        <img src="sorting-options.png"/>
                  
           </div>
            </div>


            <div class="mobile-option-nav-item active-option">
                <div class="">
                   
                        <img src="conference-call.png"/>
                   
                </div>
            </div>

            <div class=" dropdown payment-icon mobile-option-nav-item">
                <div class="pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img src="invoice.png"/>
                        <ul class="dropdown-menu" aria-labelledby="#open-payment-options">
                            <li><i
                                    class="icon-arrow-right22 no-margin dropdown-item"></i> Monthly Payments
                            </li>
                            <li><i
                                    class="icon-arrow-right22 no-margin dropdown-item"></i> SMS Balance</li>
                        </ul>
                    </a>
                </div>
            </div>
           

                <li class="mobile-option-nav-item dropdown <g:if test="${menu?.equals('admin')}">active-option</g:if>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class=" icon-add-to-list position-left"></i><span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" style="right: 0!important;left: auto!important;">
                        <li><g:link controller="promo" action="promoList" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin dropdown-item"></i>Promo List</g:link></li>
                        <li><g:link controller="promo" action="promoAdd" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>Promo Add</g:link></li>
                        <li><g:link controller="promo" action="myPromoList" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>My Promotions</g:link></li>
                        <li><g:link controller="promo" action="myPromoListPool" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>My Promo WishList</g:link></li>
                        <li><g:link controller="promo" action="promoCheck" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>Promo Check</g:link></li>
                        <li><g:link controller="promo" action="promoApprove" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>Promo Approve</g:link></li>
                        <li><g:link controller="admin" action="statistics" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>Feedback statistics</g:link></li>
                        <li><g:link controller="admin" action="advancedStatistics" params="['menu': 'admin']"><i
                                class="icon-arrow-right22 no-margin"></i>Advanced statistics</g:link></li>
                    </ul>
                </li>

            </sec:ifAllGranted>
        </nav>
		 <style>

    .main-nav {
        z-index: 1000;
        position: fixed;
        width: 100%;
        will-change: transform;
        transform: translateZ(0);
    }

    .mobile-option-nav {
        display: flex;
        text-align: center;
        background-color: white;
        height: 50px;
        color: black;
    }

    .mobile-option-nav-item {
        flex-grow: 1;
        text-align: center;
        font-size: 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mobile-option-nav-item img {
        width: 24px !important;
        height: auto;
    }

    .mobile-option-nav-item a {
        color: black;
    }

    .mobile-option-nav > .active-option img {
        filter: none !important;
    }

    .payment-icon {
        background: white !important;
    }

    .mobile-option-nav-item img {
        filter: invert(58%) sepia(95%) saturate(1%) hue-rotate(33deg) brightness(97%) contrast(93%);
    }
    </style>