<template>

    <div class="careerfy-column-9">
        <div class="careerfy-typo-wrap">
            <div class="careerfy-employer-box-section">
                <div class="careerfy-profile-title">
                    <h2>Saved Jobs</h2>
                    <form class="careerfy-employer-search">
                        <input value="Search orders" onblur="if(this.value == '') { this.value ='Search orders'; }" onfocus="if(this.value =='Search orders') { this.value = ''; }" type="text">
                        <input value="" type="submit">
                        <i class="careerfy-icon careerfy-search"></i>
                    </form>
                </div>
                <div class="careerfy-candidate-savedjobs">
                    <div class="careerfy-candidate-savedjobs-wrap">
                        <table>
                            <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Date Saved</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody v-for="application in applications">
                            <tr>
                                <td>
                                    <a href="#" class="careerfy-savedjobs-thumb"><img src="png/candidate-saved-jobs-thumb.png" alt=""></a>
                                    <h2><a href="#">{{application.name}}</a></h2>
                                </td>
                                <td><span>@ {{ application.location }}</span></td>
                                <td>{{ application.date }}</td>
                                <td>
                                    <a href="#" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-rubbish"></i></a>
                                    <a href="#" class="careerfy-savedjobs-links"><i class="careerfy-icon careerfy-view"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <paginate
                                :page-count="pageCount"
                                :click-handler="fetch"
                                :prev-text="'Prev'"
                                :next-text="'Next'"
                                :container-class="'pagination'">
                        </paginate>
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
                applications: [],
                pageCount: 1,
                endpoint: '/api/jobs/applied?page='
            };
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch(page = 1) {
                axios.get(this.endpoint + page)
                    .then(({data}) => {
                        this.applications = data.data;
                        //this.pageCount = data.meta.last_page;
                    });
            },

            report(id) {
                if (confirm('Are you sure you want to report this signature?')) {
                    axios.put('api/signatures/' + id + '/report')
                        .then(response => this.removeSignature(id));
                }
            },

            removeSignature(id) {
                this.signatures = _.remove(this.signatures, function (signature) {
                    return signature.id !== id;
                });
            }
        }
    }

</script>