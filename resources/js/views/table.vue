<template>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>FAIXA</th>
                <th>ARTISTA</th>
                <th>AVALIAÇÃO</th>
                <th>OUÇA</th>
                <th>AÇÕES</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="musica of musicas" :key="musica.id">
                <td>{{ musica.faixa }}</td>
                <td>{{ musica.artista }}</td>
                <td>{{ musica.avaliacao }} <i class="material-icons star">star_border</i></td>
                <td class="miniatura-musica">
                    <a :href="musica.url" target="_blank" rel="noopener noreferrer"><img src="./img/song_play.png"
                            alt="img-track">
                    </a>
                </td>
                <td>
                    <i @click="editar_musica(musica.id)" class="material-icons color-blue pointer">create</i>
                    <i @click="excluir_musica(musica)" class="material-icons color-red pointer">delete</i>
                </td>
            </tr>
        </tbody>
    </table>

</template>

<script>

import musicas from '../services/musicas';

export default {
    data() {
        return {
            musicas: [],
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
        this.listarMusicas();
    },

    methods: {
        listarMusicas() {
            musicas.trazerMusicas().then(resposta => {
                console.log(resposta);
                this.musicas = resposta.data.musicas;
            })
        },

        excluir_musica(musica) {
            musicas.excluirMusicas(musica).then(resposta => {
                Swal.fire(
                    'MySongs - Laravue',
                    resposta.data.mensagem,
                    'success'
                )
                this.listarMusicas();
            })
        },

        // função para redirecionar o usuário para a tela de edição
        // temos o parâmetro que passará pelo arquivos de rotas
        editar_musica(musica) {
            this.$router.push({ name: "edit", params: { musica: musica } });
        }
    }
}
</script>

<style>
/*  */
</style>