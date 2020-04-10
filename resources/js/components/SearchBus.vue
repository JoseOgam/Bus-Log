<template>
    <div class="site-section pt-0 pb-0 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form class="trip-form">
                        <div class="row align-items-center mb-4">
                            <div class="col-md-6">
                                <h3 class="m-0">I would like to travel....</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="cf-1">from</label>
                                <input type="text" id="cf-1" placeholder="Your pickup address" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cf-2">to</label>
                                <input type="text" id="cf-2" placeholder="Your drop-off address" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cf-3">date</label>
                                <input type="text" id="cf-3" placeholder="Your pickup address"
                                       class="form-control datepicker px-3">
                            </div>
                            <!-- <div class="form-group col-md-3">
                                 <label for="cf-4">Return date</label>
                                 <input type="text" id="cf-4" placeholder="Your pickup address"
                                        class="form-control datepicker px-3">
                             </div>-->
                            <div class="form-group col-md-3 ">
                                <label for="cf-3">search</label>
                                <input type="submit" id="cf-4" placeholder="Search Bus"
                                       class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "SearchBus"
    }
</script>

<style scoped>

</style>
