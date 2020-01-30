import React, {useContext} from 'react';
import { Link } from 'react-router-dom';
import { makeStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import Button from '@material-ui/core/Button';
import IconButton from '@material-ui/core/IconButton';
import HomeIcon from '@material-ui/icons/Home';
import {LanelittContext} from "../contexts/LanelittContext";


const useStyles = makeStyles(theme => ({
    root: {
        flexGrow: 1,
    },
    menuButton: {
        marginRight: theme.spacing(2),
    },
    title: {
        flexGrow: 1,
    },
}));

export default function ButtonAppBar() {

    const context = useContext(LanelittContext);
    const classes = useStyles();

    return (
        <div className={classes.root}>
            <AppBar position="static">
                <Toolbar>
                    <IconButton edge="start" className={classes.menuButton} color="inherit" aria-label="menu" href="/">
                        <HomeIcon/>
                    </IconButton>
                    <Typography variant="h6" className={classes.title}>
                        Lånelitt
                    </Typography>
                        <Link to="/log" style={{ textDecoration: 'none', color: 'white' }}>
                    <Button color="inherit">Logg på</Button>
                        </Link>
                </Toolbar>
            </AppBar>
        </div>
    );
}










