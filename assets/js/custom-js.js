document.onreadystatechange = () => {
    if (document.readyState === 'complete') {
        // shortcut to create todo
        document.onkeydown = (e) => {
            if(e.altKey && e.which == 78) {
                document.querySelector("#todoHeader").focus();
            } else {
                return true;
            }
        }
        // show close button, show todo details fields and hide add button
        document.querySelector("#toDoFormArea").onkeydown = (e) => {
            if (e.keyCode == 13){
                e.preventDefault();
                if(document.querySelector("#todoHeader").value === ''){
                    document.querySelector("#todoHeader").classList.add('btn-danger');
                    document.querySelector("#errorAlert").classList.remove('d-none');
                } else {
                    document.querySelector("#errorAlert").classList.add('d-none');
                    document.querySelector("#todoHeader").classList.remove('btn-danger');
                    document.querySelector("#todoCloseDivBtn").classList.remove('d-none');
                    document.querySelector("#todoDetails").classList.remove('d-none');
                    document.querySelector('#todoAddDivBtn').classList.add('d-none');
                }
            } else if (e.keyCode == 27) {
                document.getElementById("todoForm").reset();
                document.querySelector("#todoHeader").blur();
                document.querySelector("#todoHeader").classList.remove('btn-danger');
                document.querySelector("#todoAddDivBtn").classList.remove('d-none');
                document.querySelector("#todoDetails").classList.add('d-none');
                document.querySelector('#todoCloseDivBtn').classList.add('d-none');
                document.querySelector('#errorAlert').classList.add('d-none');
            }
        }
        //
        // show close button, show todo details fields and hide add button
        document.querySelector("#addToDo").addEventListener('click', () => {
            if(document.querySelector("#todoHeader").value === ''){
                document.querySelector("#todoHeader").classList.add('btn-danger');
                document.querySelector("#errorAlert").classList.remove('d-none');
            } else {
                document.querySelector("#errorAlert").classList.add('d-none');
                document.querySelector("#todoHeader").classList.remove('btn-danger');
                document.querySelector("#todoCloseDivBtn").classList.remove('d-none');
                document.querySelector("#todoDetails").classList.remove('d-none');
                document.querySelector('#todoAddDivBtn').classList.add('d-none');
            }
        });
        // show add button, hide todo details fields and hide close button
        document.querySelector("#closeToDo").addEventListener('click', () => {
            document.getElementById("todoForm").reset();
            document.querySelector("#todoAddDivBtn").classList.remove('d-none');
            document.querySelector("#todoDetails").classList.add('d-none');
            document.querySelector('#todoCloseDivBtn').classList.add('d-none');
        });
    }
}