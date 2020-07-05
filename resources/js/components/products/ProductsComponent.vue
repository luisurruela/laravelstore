<template>

    <div>
        <div class="container">
            <h1>{{title}}</h1>
            <div class="row">
                <div class="col-md-4" v-for="product in products" v-bind:key="product.id">
                    <div class="card">
                        <div class="card-body">
                            <a :href="product.slug"><h2><strong>{{product.name}}</strong></h2></a>
                            <p>{{product.description}}</p>
                            <span class="price"><strong>$ {{product.price}}</strong></span>
                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success float-right">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            title: 'New Arrivals',
            products: {}
        }
    },
    mounted() {
        this.fetchProducts();
    },
    methods: {
        fetchProducts() {
            axios.get('/api/products').then(res => {
                this.products = res.data;
                console.dir(this.products)
            })
        }
    },
}
</script>

<style>
.price {font-size: 20px;}
.card-body {
    min-height: 180px;
}
</style>