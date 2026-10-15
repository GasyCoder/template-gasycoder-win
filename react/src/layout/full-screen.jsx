import React from 'react';
import { Outlet } from 'react-router-dom';

const FullScreenLayout = ({ ...props }) => {
    return (
        <>
            <div className="nk-main">
                <div className="nk-wrap flex min-h-screen flex-col">
                    <Outlet />
                </div>
            </div>
        </>
    );
};
export default FullScreenLayout;
