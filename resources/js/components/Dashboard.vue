<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <el-card class="box-card">
                    <div slot="header" class="clearfix">
                        <span>Dashboard</span>
                    </div>
                    <div class="text item">
                            Welcome To Sistem Informasi Kajian
                    </div>
                </el-card>
            </div>
            <div class="col-md-3">
                <el-card class="box-card">
                    <div class="text item">
                           Anda Sedang Berada di SI-KAJI 
                    </div>
                    <div class="text item mt-3">
                           Selamat Datang
                           <div class="row">
                                <div class="col-md-6">
                                    <img src="https://www.vhv.rs/dpng/d/426-4264903_user-avatar-png-picture-avatar-profile-dummy-transparent.png" width="55px" height="50px"/>
                                </div>
                                <div class="col-md-6">
                                    <table>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>Tri Kartika</td>
                                        </tr>
                                        <tr>
                                            <td>NIP</td>
                                            <td>:</td>
                                            <td>2324325</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                    </div>
                </el-card>
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
