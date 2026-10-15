import React, { useState } from 'react';
import classNames from 'classnames';
import { Head, Block, Icon } from '../../componenets';
import { nioIcon } from '../../store/IconData';
import CopyToClipboard from 'react-copy-to-clipboard';

const Preview = ({ icon, className }) => {
    const wrapperClass = classNames({
        [`${className}`]: className,
    });

    const [copy, setCopy] = useState(false);

    const handleCopy = () => {
        setCopy(true);
        setTimeout(() => setCopy(false), 2000);
    };

    return (
        <div className={wrapperClass}>
            <div className="group relative h-full overflow-hidden rounded-md border border-gray-300 bg-white px-4 py-5 text-center dark:border-gray-900 dark:bg-gray-950">
                <CopyToClipboard text={`<Icon name="${icon}" />`}>
                    <button
                        type="button"
                        className="absolute end-1 top-1 flex h-8 w-8 items-center justify-center text-base opacity-0 transition-all group-hover:opacity-100"
                        onClick={handleCopy}
                    >
                        {copy ? (
                            <Icon className="text-green-600" name="copy-fill" />
                        ) : (
                            <Icon name="copy" />
                        )}
                    </button>
                </CopyToClipboard>
                <div>
                    <Icon
                        className="text-3xl text-slate-600 transition-none dark:text-slate-300"
                        name={icon}
                    />
                </div>
                <span className="text-xxs text-slate-400">{icon}</span>
                <span
                    className={`text-primary-600 bg-opacity-90 pointer-events-none absolute inset-0 flex items-center justify-center bg-white text-sm transition-all duration-300 dark:bg-gray-800 ${copy ? 'opacity-100' : 'opacity-0'}`}
                >
                    Copied
                </span>
            </div>
        </div>
    );
};

const NioIconsPage = () => {
    return (
        <>
            <Head title="Nioicon" />
            <div className="mx-auto lg:max-w-[960px]">
                <Block.PageHead className="md:max-w-[720px]">
                    <Block.Back to="/components">Components</Block.Back>
                    <Block.TitleLg>Nioicon Font</Block.TitleLg>
                    <Block.LeadText>
                        <strong>Nioicon</strong> is hand-crafted and beautiful
                        icon set which is designed by <strong>Softnio</strong>{' '}
                        Team. We inspired from google icons and carefuly
                        designed this for <strong>DashWind</strong> dashboard.
                        It's have {nioIcon.length} icons that helps much in your
                        project.
                    </Block.LeadText>
                    <Block.Text>
                        At first import{' '}
                        <code className="text-pink-500">Icon</code> component.
                        Then use{' '}
                        <code className="text-pink-500">
                            &lt;Icon name=&quot;icon-name&quot;/&gt;
                        </code>{' '}
                        <br /> Or you can just the markup from this page.
                    </Block.Text>
                </Block.PageHead>
                <Block>
                    <div className="-m-2.5 flex flex-wrap sm:-m-4">
                        {nioIcon.map((item, index) => {
                            return (
                                <Preview
                                    className="max-w-[50%] flex-[1_0_150px] p-2.5 sm:p-4"
                                    key={index}
                                    icon={item.name}
                                />
                            );
                        })}
                    </div>
                </Block>
            </div>
        </>
    );
};

export default NioIconsPage;
