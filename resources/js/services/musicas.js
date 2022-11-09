import { http } from './config.js';

export default {

    trazerMusicas: () => {
        return http.get(`/api/musicas`);
    },

    trazerMusica: (musica) => {
        return http.get(`/api/musicas/${musica}`);
    },

    salvarMusicas: (musica) => {
        return http.post(`/api/musicas`, musica);
    },

    atualizarMusicas: (musica) => {
        return http.put(`/api/musicas/${musica.id}`, musica);
    },

    excluirMusicas: (musica) => {
        return http.delete(`/api/musicas/${musica.id}`, {data: musica});
    }
}