import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <div>
                <h3>All Products</h3>
            </div>
        );
    }
}

if (document.getElementById('index')) {
    ReactDOM.render(<Example />, document.getElementById('index'));
}
