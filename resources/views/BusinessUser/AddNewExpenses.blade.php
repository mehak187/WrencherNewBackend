<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Add New Expenses</title>
</head>

<body>
    <section class="my-3 mx-sm-3 mx-2 nav-bg rounded-4">
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="col-6">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="{{ route('BusinessUser.Expense') }}" class="text-dark me-2"><i
                                class="fa-solid fa-arrow-left bg-white shadow p-2 rounded-circle"></i></a>
                        <h4 class="mb-0 dark-blue font-j">Add New Expenses</h4>
                    </div>
                </div>
                <div class="col-6">
                    @include('Templates.BusinessUserNavBar')
                </div>
            </div>
        </div>
        <div class="p-2">
            <div class="right-bottom1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="p-4">
                            <h3 class="expense-color">New Expense</h3>
                            <form action="#">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="date" class="form-label font-md">Date:</label>
                                            <div class="border rounded-3 d-flex align-items-center form-bg">
                                                <input type="date" id="date" name="date"
                                                    class="form-control rounded-3 focus-none form-bg">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="selectitem" class="form-label font-md">Item Name:</label>
                                            <div class="border rounded-3 d-flex align-items-center">
                                                <select id="selectitem" name="selectitem"
                                                    class="form-select focus-none rounded-3 form-bg">
                                                    <option value="" disabled selected>Select item</option>
                                                    <option value="item1">item 1</option>
                                                    <option value="item2">item 2</option>
                                                    <option value="item3">item 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="amount" class="form-label font-md">Total Amount:</label>
                                            <div class="border rounded-3 d-flex align-items-center">
                                                <input type="number" id="amount" name="amount"
                                                    class=" form-control focus-none rounded-3 form-bg" placeholder="$:">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="Reimburse" class="form-label font-md">Reimburse to:</label>
                                            <div class="border rounded-3 d-flex align-items-center">
                                                <select id="Reimburse" name="Reimburse"
                                                    class="form-select focus-none rounded-3 form-bg">
                                                    <option value="" disabled selected>No Reimburse</option>
                                                    <option value="item1">Select 1</option>
                                                    <option value="item2">Select 2</option>
                                                    <option value="item3">Select 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="selectjob" class="form-label font-md">Select Job:</label>
                                            <div class="border rounded-3 d-flex align-items-center">
                                                <select id="selectjob" name="selectjob"
                                                    class="form-select focus-none rounded-3 form-bg">
                                                    <option value="" disabled selected>Select Job</option>
                                                    <option value="item1">Jop 1</option>
                                                    <option value="item2">Jop 2</option>
                                                    <option value="item3">Jop 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="picture-c" class="form-label font-md">Receipt</label>
                                            <div
                                                class="w-100 border-2 rounded-3 d-flex align-items-center pe-2 form-bg p-1">
                                                <input type="file" name="" id="picture-c" class="d-none">
                                                <label for="picture-c" class="uploadbtn2">
                                                    <a class="uploadbtn2a">Upload Image</a>
                                                    <p class="mb-0 text-muted filename overflow-hidden">No file chosen
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="payment" class="form-label font-md">Payment Status:</label>
                                            <div class="border rounded-3 d-flex align-items-center">
                                                <select id="payment" name="payment"
                                                    class="form-select shadow-none focus-none rounded-3 form-bg">
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="item1">satus 1</option>
                                                    <option value="item2">satus 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="details" class="form-label font-md">Details:</label>
                                            <div class="border rounded-3 d-flex align-items-center">
                                                <textarea id="details" name="details" class="form-control p-2 rounded-3 shadow-none focus-none form-bg" rows="5"
                                                    placeholder="Add an item Expense detail"></textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="mt-5">
                                                <button class="btn-c fs-6" type="button">Cancel</button>
                                            </div>
                                            <div class="mt-5 ms-3">
                                                <button class="btn-s fs-6" type="submit">Save Expenses</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('Templates.UserLogoutModule')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('picture-c');
            const fileNameElement = document.querySelector('.filename');

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    let fileName = fileInput.files[0].name;
                    if (fileName.length > 35) {
                        fileName = fileName.substring(0, 32) + '...';
                    }

                    fileNameElement.textContent = fileName;
                } else {
                    fileNameElement.textContent = 'No file chosen';
                }
            });
        });
    </script>
    @include('Templates.Jslinks')
</body>

</html>
