<template>
  <div>
    <div class="container">
      <div class="row custom_row_css">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-inline">
                    <li>
                      <form>
                        <input class="form-control" type="text" name="search" placeholder="Search" />
                        <button
                          class="pull-right"
                          style=" position: relative; margin-top: -27px; border: 0px; background: 0px;  padding-right: 12px; outline: none !important;"
                        >
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </form>
                    </li>
                    <li>
                      <div>
                        <select name id>
                          <option value></option>
                        </select>
                      </div>
                    </li>
                  </ul>

                  <table class="table table-bordered" id="bufferPosting">
                    <thead>
                      <tr>
                        <th>Group Name</th>
                        <th>Group Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>AAAA</td>
                        <td>BBBB</td>
                        <td>CCCC</td>
                        <td>DDDD</td>
                        <td>EEEE</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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
      bufferPostsData: {},
    };
  },
  methods: {},
  mounted() {
    axios.get("/api/history").then((res) => {
      this.bufferPostsData = res.data;
      console.log(res.data);
    });
  },
};
</script>

<style scoped>
</style>