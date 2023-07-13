<form action="{{ route('admin_survey_proceed_process') }}" method="post">
    @csrf
    <div class="row">
        @for ($i = 0; $i < $no_of_questions; $i++)
            <div class="col-md-12">
                <label for="">Question {{ $i + 1 }}</label>
                <input type="text" class="form-control" name="questions[]" required>
            </div>
        @endfor
        <div class="col-md-12">
            <br />
            <input type="hidden" name="no_of_questions" value="{{ $no_of_questions }}">
            <input type="hidden" name="survey_title" value="{{ $survey_title }}">
            <button class="btn float-right btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
