</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script>
    const expectValue = 'Individual (Couple)'; // Expecting select value


    $('select[name*="couple_with_other_applicants"]').on('focus', function () {
        console.log('Click select')
        let currentKey = $(this).attr('name'); // Get current attribute name
        currentKey = currentKey.match(/\d+/); // Get only digital number from string

        // Default options
        const optionList = [
            '<option value="" selected disabled>Select</option>',
            '<option value="N/A">N/A</option>',
            '<option value="Non-loan party">Non-loan party</option>'
        ];


        // Check selected option and add new options if expecting value was selected

        $('select[name*="applicant_status"]').each(function () {

            let appName;

            if ($(this).find(":selected").val() === expectValue) {
                if (currentKey[0] !== $(this).attr('data-key')) {
                    appName = 'Applicant ' + $(this).attr('data-key');
                     optionList.push(`<option value="${appName}">${appName}</option>`);
                }

            }
        });
        $(this).empty(); // Remove old options from this select
        $(this).append(optionList) // Add new option to this select

    });
</script>


</body>
</html>