<template>
    <form @submit.prevent="editar_musica" class="cadastrar-musica">

        <div class="dados">
            <label for="faixa">Faixa</label>
            <input class="inp-msc" v-model="musica.faixa" required type="text" name="faixa" id="faixa">

            <label for="artista">Artista</label>
            <input class="inp-msc" v-model="musica.artista" required type="text" name="artista" id="artista">

            <label for="url">URL (opcional)</label>
            <input class="inp-msc" v-model="musica.url" type="url" name="url" id="url">

            <label for="avaliacao">Avaliação (1 - 5)</label>
            <input class="inp-msc" required v-model="musica.avaliacao" type="text" name="avaliacao" id="avaliacao">


            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="textarea1" v-model="musica.comentario" class="materialize-textarea"></textarea>
            </div>

        </div>

        <div class="botoes">
            <button class="waves-effect waves-light btn btn-style bg-laravel-theme"><i
                    class="material-icons left no-responsive">create</i>Atualizar</button>
        </div>

    </form>
</template>

<script>

import musicas from '../services/musicas';

export default {
    data() {
        return {
            musica: {
                id: '',
                faixa: '',
                artista: '',
                url: '',
                avaliacao: '',
                comentario: '',
            },
        }
    },

    mounted() {

        // capturando id passado na url
        let id = new URL(location.href).searchParams.get('musica');

        // buscando dados da música através do id
        this.obterMusica(id);
    },

    methods: {

        // capturando dado
        obterMusica(musica) {
            musicas.trazerMusica(musica).then(resposta => {
                console.log(resposta);
                this.musica = resposta.data.musica;
            })
        },

        // editando dado
        editar_musica() {
            musicas.atualizarMusicas(this.musica).then(resposta => {
                Swal.fire(
                    'MySongs - Laravue',
                    resposta.data.mensagem,
                    'success'
                )
                this.$router.push({ name: "table" });
            })
        }
    }

}
</script>

<style>
/*  */
</style>