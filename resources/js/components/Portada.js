import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Portada extends Component {
    constructor(props) {

        super(props);

        this.state = {
            portada: [],
        }
    }

    componentDidMount(){
        axios.get('api/congreso/' + this.props )
            .then(response => {
                this.setState({ portada: response.data });
            })
            .catch(function (error) {
                console.log(error);
            })
    }

    render() {
        return (
            <div>
                {this.renderTopicos()}
            </div>
        )
    }
}

if (document.getElementById('portada')) {
    ReactDOM.render(<Portada />, document.getElementById('portada'));
}