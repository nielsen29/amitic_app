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
        const appURL = this.his
        return (
            <div>
                <MenuAppBar/>
                <BrowserRouter>
                    <Switch>
                        <Route exact path={appURL + '/'} render={() => <div className="container alert-warning"><h1>esto es el path</h1></div>}/>
                        <Route exact path={appURL + '/login'} component={SignIn}/>
                        <Route exact={} path={appURL + '/user'} render={()=>{

                            <div>

                            </div>

                        }}/>
                    </Switch>

                </BrowserRouter>
            </div>

        )
    }

}

ReactDOM.render(<App/>, document.getElementById('app'));

