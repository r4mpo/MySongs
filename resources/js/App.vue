<template>
        <nav class="nav-extended">
        <div class="nav-wrapper bg-laravel-theme">
            <a href="#" class="brand-logo nav-logo"><img src="../js/views/img/logo-laravue.jpg" alt="spa-laravue"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Github</a></li>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <div class="nav-content bg-laravel-theme">
            <ul class="tabs tabs-transparent">
                <li class="tab"><router-link :to="{name: 'table'}" class="active">Minhas músicas</router-link></li>
                <li class="tab"><router-link :to="{name: 'form'}">Cadastrar nova</router-link></li>
                <li class="tab"><router-link :to="{name: 'iframes'}">Recomendações do desenvolvedor</router-link></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Linkedin</a></li>
        <li><a href="#">Instagram</a></li>
    </ul>
    <router-view></router-view>
</template>

<script>
    export default {
        // name: App
    }
</script>

<style>
    /*  */
</style>