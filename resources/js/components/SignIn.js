/**
 * Created by amihealthmel on 11/20/18.
 */
import React, { Component } from 'react';
import PropTypes from 'prop-types';
import Avatar from '@material-ui/core/Avatar';
import Button from '@material-ui/core/Button';
import CssBaseline from '@material-ui/core/CssBaseline';
import FormControl from '@material-ui/core/FormControl';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import Checkbox from '@material-ui/core/Checkbox';
import Input from '@material-ui/core/Input';
import InputLabel from '@material-ui/core/InputLabel';
import LockIcon from '@material-ui/icons/LockOutlined';
import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';
import withStyles from '@material-ui/core/styles/withStyles';


import axios from 'axios';
import {Link} from 'react-router-dom';

const styles = theme => ({
    main: {
        width: 'auto',
        display: 'block', // Fix IE 11 issue.
        marginLeft: theme.spacing.unit * 3,
        marginRight: theme.spacing.unit * 3,
        [theme.breakpoints.up(400 + theme.spacing.unit * 3 * 2)]: {
            width: 400,
            marginLeft: 'auto',
            marginRight: 'auto',
        },
    },
    paper: {
        marginTop: theme.spacing.unit * 8,
        display: 'flex',
        flexDirection: 'column',
        alignItems: 'center',
        padding: `${theme.spacing.unit * 2}px ${theme.spacing.unit * 3}px ${theme.spacing.unit * 3}px`,
    },
    avatar: {
        margin: theme.spacing.unit,
        backgroundColor: theme.palette.secondary.main,
    },
    form: {
        width: '100%', // Fix IE 11 issue.
        marginTop: theme.spacing.unit,
    },
    submit: {
        marginTop: theme.spacing.unit * 3,
    },
});
class SignIn extends React.Component{

    constructor(){
        super();

        this.state = {
            email: '',
            password: ''
        }


        this.onSubmit = (e) => {

            e.preventDefault();
            const {email,password} = this.state;
            console.log(email);

            axios.post('/api/login',{
                email,
                password
            })
                .then(response => {
                    this.setState({err: false});
                    this.props.history.push("/home");
                })
                .catch(error=>{
                    this.refs.email.value = "";
                    this.refs.password.value = "";
                });
        }

        this.onChange = (e) => {

            const {name,value} = e.target;
            this.setState({[name]: value});

            console.log(name);
            console.log(value);



        }

    }


render() {
    const { classes } = this.props;


    return (
        <main className={classes.main}>
            <CssBaseline />
            <Paper className={classes.paper}>
                <Avatar className={classes.avatar}>
                    <LockIcon />
                </Avatar>
                <Typography component="h1" variant="h5">
                    Sign in
                </Typography>
                <form className={classes.form} method="post" action="login">
                    <FormControl margin="normal" required fullWidth>
                        <InputLabel htmlFor="email">Email Address</InputLabel>
                        <Input id="email" name="email" ref="email" autoComplete="email" autoFocus

                               onChange={this.onChange.bind(this)}
                        />
                    </FormControl>
                    <FormControl margin="normal" required fullWidth>
                        <InputLabel htmlFor="password">Password</InputLabel>
                        <Input name="password" ref="password" type="password" id="password" autoComplete="current-password"

                               onChange={this.onChange.bind(this)}
                        />
                    </FormControl>
                    <FormControlLabel
                        control={<Checkbox value="remember" color="primary" />}
                        label="Remember me"
                    />
                    <Button
                        type="submit"
                        fullWidth
                        variant="contained"
                        color="primary"
                        className={classes.submit}
                    >
                        INGRESAR
                    </Button>
                </form>
            </Paper>
        </main>
    );
}
}

SignIn.propTypes = {
    classes: PropTypes.object.isRequired,
};



export default withStyles(styles)(SignIn);