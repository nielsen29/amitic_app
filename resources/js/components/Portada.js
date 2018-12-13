import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Portada extends Component {
    constructor(props) {

        super(props);

        this.state = {
            congreso: congreso,
        }
        this.renderPortada=this.renderPortada.bind(this);
    }

    renderPortada(){

        return(
            <h1>congreso.id</h1>
        );
    }

    render() {
        return (
            <div>

                {this.renderPortada()}
            </div>
        )
    }
}

if (document.getElementById('portada')) {
    ReactDOM.render(<Portada />, document.getElementById('portada'));
}