<template>
    <div class="container">
        <div class="row">
          <p class="text-center" v-if="loading">
              Cargando...
          </p>
            <p class="text-center" v-if="!loading">
                <button class="btn btn-primary" v-if="status == 0">Enviar solicitud de amistar</button>
                <button class="btn btn-primary" v-if="status == 'pendiente'">Aceptar solicitud de amistar</button>
                <span class="text-success" v-if="status == 'esperando'">Esperando respuesta</span>
                <span class="text-success" v-if="status == 'amigos'">Sois amigos</span>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        mounted(){
            this.$http.get('/check_relationship_status/' + this.profile_user_id)
                    .then( (resp) => {
                        console.log(resp)
                        this.status = resp.body.status
                        this.loading = false
                    })
        },
        props: ['profile_user_id'],
        data(){
            return {
                status: '',
                loading: true
            }
        }
    }
</script>
