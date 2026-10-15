import React, { useState } from 'react';
import { usePopper } from 'react-popper';
import { Listbox } from '@headlessui/react';

const CategorySelect = ({ selected, setSelected, data }) => {
    let [referenceElement, setReferenceElement] = useState();
    let [popperElement, setPopperElement] = useState();
    let { styles, attributes } = usePopper(referenceElement, popperElement, {
        placement: 'bottom',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: [0, 4],
                },
            },
        ],
    });
    return (
        <Listbox value={selected} onChange={setSelected}>
            <Listbox.Button
                ref={setReferenceElement}
                className="focus:border-primary-500 focus:dark:border-primary-600 focus:outline-primary-200 focus:dark:outline-primary-950 box-border flex h-9 w-full items-center rounded border border-gray-200 bg-white px-4 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all outline-none focus:z-10 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:border-gray-800 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
            >
                <span className={`fc-select-dot ${selected.value}`}></span>
                {selected.label}
            </Listbox.Button>
            <Listbox.Options
                ref={setPopperElement}
                style={styles.popper}
                {...attributes.popper}
                className="absolute z-10 max-h-80 w-full overflow-auto rounded-md border border-gray-200 bg-white p-1 shadow dark:border-gray-800 dark:bg-gray-950"
            >
                {data.map((item, index) => (
                    <Listbox.Option
                        key={index}
                        value={item}
                        className="ui-selected:bg-gray-100 cursor-pointer rounded px-3 py-1.5 text-sm/5 hover:bg-gray-100"
                    >
                        <span className={`fc-select-dot ${item.value}`}></span>
                        {item.label}
                    </Listbox.Option>
                ))}
            </Listbox.Options>
        </Listbox>
    );
};

export default CategorySelect;
