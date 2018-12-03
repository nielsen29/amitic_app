import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ListItemText from '@material-ui/core/ListItemText';


export default class Topicos extends Component {
    constructor(props) {

        super(props);

        this.state = {
            topicos: [],
        }
    }

    componentDidMount(){
        axios.get('http://localhost:8011/api/topicos')
            .then(response => {
                this.setState({ topicos: response.data });
            })
            .catch(function (error) {
                console.log(error);
            })
    }

    renderTopicos(){

        return this.state.topicos.map(topico => {
            return(
                <li key={topico.id} >
                    { topico.nombre }
                </li>

            );
        })
    }

    render() {
        return (
            <div>
                <h1>Topicos:</h1>
                {this.renderTopicos()}
            </div>
        )
    }
}

if (document.getElementById('topicos')) {
    ReactDOM.render(<Topicos />, document.getElementById('topicos'));
}