<link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/footer.css') }}">


<div class="row">
    <div class="col-md-3 footer-brand">
        <img class="logo_footer" src="{{ asset('assets\img\logos\wineculture_logo_darkmode.png') }}" alt="" srcset="">
    </div>
    <div class="col-md-4 footer-nav pages_ul">
        <div class="row">
            <div class="col-md-5 ml-md-5">
                <ul class="pages ">
                    <li><a href="{{ route('index') }}">Início</a></li>
                    <li><a href="{{ route('sobre') }}">Sobre</a></li>
                    <li><a href="{{ route('vinhos') }}">Vinhos</a></li>
                    <li><a href="{{ route('sobre_vinhos') }}">Sobre Vinhos</a></li>
                    <li><a href="{{ route('index_blog_frontend') }}">Notícias</a></li>
                </ul>
            </div>
            <div class="col-md-5 ml-md-2" style="margin-right: 0px">
                <ul class="pages">
                    <li><a href="{{ route('receitas') }}">Receitas</a></li>
                    <li><a target="_blank" href="http://wineculture.test">Loja</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('pdp') }}">Politica de Privacidade</a></li>
                    <li><a href="{{ route('termos_condicoes') }}">Termos e Condições</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3 footer-nav footer-social">
        <div class="col-md-12">
            <h4>Contactos:</h4>
            <div class="contacts_footer">
                <ul>
                    <li>
                        <a href="{{ route('contactos') }}">Fale Connosco</a>
                    </li>
                    <li>
                        Telefone:&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;
                        (+351) 244 830 010
                    </li>
                    <li>
                        Telemóvel:&nbsp;<i class="fa fa-phone">&nbsp;</i>
                        967 830 010
                    </li>
                    <li>
                        Email:&nbsp;<i class="fa fa-envelope"></i>&nbsp;
                        wineculture@wineculture.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-2 footer-social">
        <h4>Redes Sociais:</h4>
        <ul>
            <li><i class="fa fa-facebook-square socials_icon"></i><a href="">Facebook</a></li>
            <li><i class="fa fa-twitter socials_icon"></i><a href="">Twitter</a></li>
            <li><i class="fa fa-instagram socials_icon"></i><a href="">Instagram</a></li>
        </ul>
    </div>
</div>
