import React from 'react';
import { Head, Button } from '../../componenets';

const Error504ModernPage = () => {
    return (
        <>
            <Head title="Error 504 Modern" />
            <div className="relative flex min-h-screen items-center justify-center">
                <div className="m-auto max-w-[520px] px-4 py-8 text-center">
                    <div className="mb-15">
                        <img src="/images/gfx/error-504.svg" alt="" />
                    </div>
                    <h3 className="font-heading leading-tighter pb-4 text-2xl font-bold tracking-tight text-slate-700 lg:text-3xl dark:text-white">
                        Gateway Timeout Error
                    </h3>
                    <p className="mb-4 text-base text-slate-600">
                        We are very sorry for inconvenience. It looks like some
                        how our server did not receive a timely response.
                    </p>
                    <Button
                        as="Link"
                        to="/home"
                        variant="primary"
                        size="lg"
                        className="mt-3"
                    >
                        Back To Home
                    </Button>
                </div>
            </div>
        </>
    );
};
export default Error504ModernPage;
