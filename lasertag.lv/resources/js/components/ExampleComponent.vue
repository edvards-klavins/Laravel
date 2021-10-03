<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Not Component</div>

                    <div class="card-body">
                        <carousel :per-page="1" :navigate-to="someLocalProperty" :mouse-drag="false">
                            
                            <slide>
                                Slide 1 Content
                            </slide>
                            <slide>
                                Slide 2 Content
                            </slide>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
