/**
 * Created by amihealthmel on 11/20/18.
 */
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Portada from './Portada';
import Topicos from './Topicos';

export default class Index extends Component {
    render() {
        return (
            <div>
                <Portada />
                <Topicos />
            </div>
        );
    }
}

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}

