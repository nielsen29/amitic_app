/**
 * Created by amihealthmel on 11/20/18.
 */
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Topicos from './Topicos';

export default class Index extends Component {
    render() {
        return (
            <Topicos />
        );
    }
}

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}
