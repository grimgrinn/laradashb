 <template>
        <div>
            <div class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto">
                <h2 class="title">Welcome to the Udlenitel Store</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 product-box" v-for="(product,index) in products" @key="index">
                                <router-link :to="{ path: '/products/'+product.id}">
                                    <div class="img-wrapper">
                                        <img :src="product.image" :alt="product.name">
                                    </div>
                                    <h5><span v-html="product.name"></span>
                                        <span class="small-text text-muted float-right">RUR {{product.price}}</span>
                                    </h5>
                                    <button class="col-md-4 btn btn-sm btn-primary float-right">Buy Now</button>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <script>
        export default {
            data(){
                return {
                    products : []
                }
            },
            mounted(){
                axios.get("api/products/").then(response => this.products = response.data)
            }
        }
    </script>

<style scoped>
    img {
        max-width:200px;
    }
    .img-wrapper {
        height:200px;
    }
    .small-text {
        font-size: 14px;
    }
    .product-box {
        border: 1px solid #cccccc;
        padding: 10px 15px;
    }
    .hero-section {
        height: 30vh;
        background: #ababab;
        align-items: center;
        margin-bottom: 20px;
        margin-top: -20px;
    }
    .title {
        font-size: 60px;
        color: #ffffff;
    }
    </style>
