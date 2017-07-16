const Form = React.createClass({
    render: function() {
        return (
        <form method="post" action="send_add_request.php">
                <div className="form-group">
                    <label for="title">Фильм</label>
                    <input type="text" className="form-control" id="title" name="title" placeholder="Фильм" required/>
                </div>
                <div className="form-group">
                    <label for="year">Год выпуска</label>
                    <input type="number" className="form-control" id="year" name="year" placeholder="Год выпуска" required/>
                </div>
                <div className="form-group">
                    <label for="format">Формат</label>
                    <input list="formats" className="form-control" placeholder="Формат" name="format" id="format" required>
                        <datalist id="formats">
                            <option value="VHS"/>
                            <option value="DVD"/>
                            <option value="Blu-Ray"/>
                        </datalist></input>
                </div>
                <div className="form-group">
                    <label for="actors">Актеры</label>
                    <input type="text" className="form-control" id="actors" name="actors" placeholder="Актеры" required/>
                </div>
                <button type="submit" className="btn btn-default centeredPos">Добавить фильм</button>
            </form>
        );
    }
});

ReactDOM.render(
  <Form/>,
    document.getElementById("film_form")
);
