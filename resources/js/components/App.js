/**
 * Created by amihealthmel on 11/20/18.
 */
import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import MenuAppBar from './MenuAppBar'
import SignIn from './SignIn'
import Index from './Index'
import axios from 'axios'


class App extends Component {



    render(){
        return (
            <BrowserRouter>

                <div>
                    <MenuAppBar/>
                    <Switch>
                        <Route exact path='/' component={Index}/>
                        <Route exact path='/login' component={SignIn}/>
                    </Switch>

                </div>

            </BrowserRouter>

        )
    }

}

ReactDOM.render(<App/>, document.getElementById('app'));

