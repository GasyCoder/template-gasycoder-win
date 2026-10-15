import React, { useEffect, useState, useRef } from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { FreeMode, Navigation, Thumbs } from 'swiper/modules';
import {
    Badge,
    Button,
    Card,
    Icon,
    PageHead,
    Block,
    Radio,
    NumberSpinner,
    LightBox,
    Head,
} from '../../../componenets';
import { Link, useParams } from 'react-router-dom';
import { productCardData } from '../../../store/products';
import { useTheme } from '../../../layout/context';

const ProductsDetailsPage = () => {
    const theme = useTheme();
    const [data, setData] = useState([]);
    const [thumbsSwiper, setThumbsSwiper] = useState(null);

    const [prevEl, setPrevEl] = useState(null);
    const [nextEl, setNextEl] = useState(null);

    let { productId } = useParams();
    // grabs the id of the url and loads the corresponding data
    useEffect(() => {
        const id = productId;
        if (id !== undefined || null || '') {
            let product = productCardData.find(
                (item) => item.id === Number(id),
            );
            if (product) {
                setData(product);
            }
        } else {
            setData(productCardData[0]);
        }
    }, [productId]);
    return (
        <>
            <Head title="Product Details" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Product Details</PageHead.Title>
                    <PageHead.SubTitle>
                        An example page for product details
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="hidden sm:inline-flex"
                        to="/product-card"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                        <span className="ms-3">Back</span>
                    </Button>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="sm:hidden"
                        icon
                        to="/product-card"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                    </Button>
                </PageHead.Group>
            </PageHead>

            <Block>
                <Card className="h-full">
                    <Card.Body>
                        <div className="-m-3.5 flex flex-wrap">
                            <div className="w-full p-3.5 lg:w-1/2">
                                <div className="relative mb-7.5 h-auto rounded border border-gray-100 xl:me-1.5 2xl:me-11">
                                    <Swiper
                                        dir="rtl"
                                        loop={true}
                                        spaceBetween={0}
                                        thumbs={{ swiper: thumbsSwiper }}
                                        modules={[FreeMode, Navigation, Thumbs]}
                                        className="sliderNav"
                                    >
                                        {data.slider &&
                                            data.slider.map((item, index) => {
                                                return (
                                                    <SwiperSlide key={index}>
                                                        <img
                                                            src={item.img}
                                                            className="w-full rounded"
                                                            alt=""
                                                        />
                                                    </SwiperSlide>
                                                );
                                            })}
                                    </Swiper>
                                    <div className="absolute -bottom-7.5 left-1/2 z-10 w-[282px] -translate-x-1/2 md:w-[384px] 2xl:w-[470px]">
                                        <Swiper
                                            onSwiper={setThumbsSwiper}
                                            loop={true}
                                            spaceBetween={0}
                                            slidesPerView={2}
                                            breakpoints={{
                                                420: {
                                                    slidesPerView: 3,
                                                },
                                                768: {
                                                    slidesPerView: 4,
                                                },
                                                1540: {
                                                    slidesPerView: 5,
                                                },
                                            }}
                                            freeMode={true}
                                            watchSlidesProgress={true}
                                            modules={[
                                                FreeMode,
                                                Navigation,
                                                Thumbs,
                                            ]}
                                            className="thumbsSwiper"
                                        >
                                            {data.slider &&
                                                data.slider.map(
                                                    (item, index) => {
                                                        return (
                                                            <SwiperSlide
                                                                key={index}
                                                                className="group swiper-slide cursor-pointer p-2 [&.swiper-slide-thumb-active]:cursor-auto"
                                                            >
                                                                <img
                                                                    src={
                                                                        item.img
                                                                    }
                                                                    className="group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600 w-full rounded border-2 border-white ring-2 ring-gray-200 transition-all dark:border-gray-950 dark:ring-gray-600"
                                                                    alt=""
                                                                />
                                                            </SwiperSlide>
                                                        );
                                                    },
                                                )}
                                        </Swiper>
                                    </div>
                                </div>
                            </div>
                            <div className="w-full p-3.5 lg:w-1/2">
                                <div className="mt-11 2xl:me-11">
                                    <h4 className="font-heading leading-tighter text-primary-600 mb-2 text-xl font-bold tracking-tight lg:text-2xl">
                                        ${data.currentPrice}{' '}
                                        <small className="text-sm font-normal text-slate-400">
                                            ${data.price}
                                        </small>
                                    </h4>
                                    <h2 className="font-heading leading-tighter mb-2 text-3xl font-bold tracking-tight text-slate-700 lg:text-4xl dark:text-white">
                                        {data.title}
                                    </h2>
                                    <div className="flex items-center">
                                        <ul className="flex items-center gap-0.5 text-yellow-600">
                                            <li>
                                                <em className="ni ni-star-fill text-base/none"></em>
                                            </li>
                                            <li>
                                                <em className="ni ni-star-fill text-base/none"></em>
                                            </li>
                                            <li>
                                                <em className="ni ni-star-fill text-base/none"></em>
                                            </li>
                                            <li>
                                                <em className="ni ni-star-fill text-base/none"></em>
                                            </li>
                                            <li>
                                                <em className="ni ni-star-half text-base/none"></em>
                                            </li>
                                        </ul>
                                        <div className="ms-2 text-sm text-slate-400">
                                            (2 Reviews)
                                        </div>
                                    </div>
                                    <div className="mt-6 mb-8 text-slate-400">
                                        <p className="text-lg">
                                            I must explain to you how all this
                                            mistaken idea of denoun cing ple
                                            praising pain was born and I will
                                            give you a complete account of the
                                            system, and expound the actual
                                            teaching.
                                        </p>
                                    </div>
                                    <div className="mb-5 last:mb-0">
                                        <ul className="flex gap-x-5.5 gap-y-4">
                                            <li>
                                                <div className="text-sm text-slate-400">
                                                    Type
                                                </div>
                                                <div className="text-base font-bold text-slate-700 dark:text-white">
                                                    Watch
                                                </div>
                                            </li>
                                            <li>
                                                <div className="text-sm text-slate-400">
                                                    Model Number
                                                </div>
                                                <div className="text-base font-bold text-slate-700 dark:text-white">
                                                    Forerunner 290XT
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div className="mb-5 last:mb-0">
                                        <h6 className="-tracking-snug font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white">
                                            Color
                                        </h6>
                                        <ul className="flex flex-wrap items-center gap-6">
                                            <li>
                                                <Radio.Color
                                                    name="productColor"
                                                    id="productColor1"
                                                    className="!bg-[#754c24]"
                                                    checked
                                                />
                                            </li>
                                            <li>
                                                <Radio.Color
                                                    name="productColor"
                                                    id="productColor2"
                                                    className="!bg-[#636363]"
                                                />
                                            </li>
                                            <li>
                                                <Radio.Color
                                                    name="productColor"
                                                    id="productColor3"
                                                    className="!bg-[#ba6ed4]"
                                                />
                                            </li>
                                            <li>
                                                <Radio.Color
                                                    name="productColor"
                                                    id="productColor4"
                                                    className="!bg-[#ff87a3]"
                                                />
                                            </li>
                                        </ul>
                                    </div>
                                    <div className="mb-5 last:mb-0">
                                        <h6 className="-tracking-snug font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white">
                                            Size
                                        </h6>
                                        <ul className="inline-flex flex-wrap items-center gap-3">
                                            <li>
                                                <Radio.Button
                                                    name="sizeCheck"
                                                    nocontrol
                                                    id="sizeCheckXS"
                                                    checked
                                                >
                                                    XS
                                                </Radio.Button>
                                            </li>
                                            <li>
                                                <Radio.Button
                                                    name="sizeCheck"
                                                    nocontrol
                                                    id="sizeCheckSM"
                                                >
                                                    SM
                                                </Radio.Button>
                                            </li>
                                            <li>
                                                <Radio.Button
                                                    name="sizeCheck"
                                                    nocontrol
                                                    id="sizeCheckL"
                                                >
                                                    L
                                                </Radio.Button>
                                            </li>
                                            <li>
                                                <Radio.Button
                                                    name="sizeCheck"
                                                    nocontrol
                                                    id="sizeCheckXL"
                                                >
                                                    XL
                                                </Radio.Button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div className="mb-5 last:mb-0">
                                        <ul className="flex flex-wrap items-center gap-3 pt-1.5">
                                            <li className="w-[140px]">
                                                <NumberSpinner
                                                    variant="white-outline"
                                                    defaultValue={0}
                                                    inputClassName="w-[68px]"
                                                ></NumberSpinner>
                                            </li>
                                            <li>
                                                <Button
                                                    size="rg"
                                                    variant="primary"
                                                >
                                                    Add to Cart
                                                </Button>
                                            </li>
                                            <li className="ms-n1">
                                                <Button.Zoom size="rg">
                                                    <Icon
                                                        className="text-primary-600 text-lg"
                                                        name="heart"
                                                    />
                                                </Button.Zoom>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-opacity-25 my-15 border-t border-gray-400"></div>
                        <div className="-m-3.5 flex flex-wrap lg:flex-row-reverse">
                            <div className="w-full p-3.5 lg:w-5/12">
                                <div className="relative overflow-hidden rounded from-black/40 to-transparent before:absolute before:start-0 before:end-0 before:bottom-0 before:h-[120px] before:bg-gradient-to-t">
                                    <img
                                        className="w-full"
                                        src="/images/product/video-a.jpg"
                                        alt=""
                                    />
                                    <LightBox
                                        className="absolute start-8 bottom-8 flex items-center gap-2 text-xl text-white"
                                        sources="https://www.youtube.com/watch?v=SSo_EIwHSd4"
                                    >
                                        <Icon
                                            className="text-3xl"
                                            name="play"
                                        />
                                        <span>Watch Video</span>
                                    </LightBox>
                                </div>
                            </div>
                            <div className="w-full p-3.5 lg:w-7/12">
                                <div className="entry 2xl:me-4">
                                    <h3>Product details of Comfy cushions</h3>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto
                                        beatae vitae dicta sunt explicabo. Neque
                                        porro quisquam est, qui dolorem
                                        consectetur, adipisci velit.Nam libero
                                        tempore, cum soluta nobis est eligendi
                                        optio cumque nihil impedit quo minus.
                                    </p>
                                    <ul className="prose-li:relative prose-li:py-1 prose-li:ps-5 prose-li:before:absolute prose-li:before:start-0 prose-li:before:top-1 prose-li:before:font-nioicon prose-li:before:content-['\e9b9'] prose-li:before:text-xs prose-li:before:text-primary-600 prose-li:leading-6 prose-li:before:leading-6">
                                        <li>
                                            Meets and/or exceeds performance
                                            standards.
                                        </li>
                                        <li>Liumbar support.</li>
                                        <li>
                                            Made of bonded teather and
                                            poiyurethane.
                                        </li>
                                        <li>Metal frame.</li>
                                        <li>Anatomically shaped cork-latex</li>
                                        <li>
                                            As attractively priced as you look
                                            attractive in one
                                        </li>
                                    </ul>
                                    <p>
                                        Unde omnis iste natus error sit
                                        voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque
                                        ipsa quae ab illo inventore veritatis et
                                        quasi architecto beatae.
                                    </p>
                                    <h3>The best seats in the house</h3>
                                    <p>
                                        I must explain to you how all this
                                        mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give
                                        you a complete account of the system,
                                        and expound the actual teachings. Unde
                                        omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam
                                        rem aperiam, eaque ipsa quae ab illo
                                        inventore veritatis et quasi architecto
                                        beatae.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </Card.Body>
                </Card>
            </Block>
            <Block>
                <div className="relative mb-5 last:mb-0">
                    <h3 className="font-heading text-2xl font-bold text-slate-700 lg:text-3xl dark:text-white">
                        Related Products
                    </h3>
                </div>
                <Swiper
                    dir="rtl"
                    spaceBetween={0}
                    slidesPerView={1}
                    slidesPerGroup={1}
                    navigation={{ prevEl, nextEl }}
                    breakpoints={{
                        576: {
                            slidesPerView: 2,
                            slidesPerGroup: 2,
                        },
                        992: {
                            slidesPerView: 3,
                            slidesPerGroup: 3,
                        },
                        1540: {
                            slidesPerView: 4,
                            slidesPerGroup: 4,
                        },
                    }}
                    modules={[Navigation]}
                    className="swiper !-mx-3.5"
                >
                    {productCardData.map((item, index) => {
                        return (
                            <SwiperSlide key={index} className="px-3.5">
                                <Card className="group h-full">
                                    <div className="relative">
                                        <Link
                                            to={`/product-details/${item.id}`}
                                        >
                                            <img
                                                className="rounded-t"
                                                src={item.img}
                                                alt=""
                                            />
                                        </Link>
                                        <ul className="absolute start-4 top-4 flex flex-wrap gap-2">
                                            {item.new && (
                                                <li>
                                                    <Badge variant="green">
                                                        New
                                                    </Badge>
                                                </li>
                                            )}
                                            {item.hot && (
                                                <li>
                                                    <Badge variant="red">
                                                        Hot
                                                    </Badge>
                                                </li>
                                            )}
                                        </ul>
                                        <ul className="absolute bottom-1 left-1/2 flex -translate-x-1/2 overflow-hidden rounded-t opacity-0 transition duration-200 ease-linear group-hover:opacity-100">
                                            <li className="px-0.5">
                                                <a
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                    className="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                                >
                                                    <em className="ni ni-cart text-base"></em>
                                                </a>
                                            </li>
                                            <li className="px-0.5">
                                                <a
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                    className="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                                >
                                                    <em className="ni ni-heart text-base"></em>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div className="p-5 text-center sm:p-6">
                                        <ul className="flex flex-wrap justify-center">
                                            <li className="p-1">
                                                <a
                                                    className="hover:text-primary-600 text-sm/6 text-slate-400"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    {item.category}
                                                </a>
                                            </li>
                                        </ul>
                                        <h5 className="font-heading leading-tighter mt-2 mb-4 text-lg font-bold">
                                            <Link
                                                className="hover:text-primary-600 text-slate-700 transition-all duration-300 dark:text-white"
                                                to={`/product-details/${item.id}`}
                                            >
                                                {item.title}
                                            </Link>
                                        </h5>
                                        <div className="font-heading leading-tighter text-primary-600 text-lg font-bold">
                                            <small className="text-xs font-normal text-slate-400 line-through">
                                                ${item.price}
                                            </small>
                                            ${item.currentPrice}
                                        </div>
                                    </div>
                                </Card>
                            </SwiperSlide>
                        );
                    })}
                    <div
                        ref={(node) => setPrevEl(node)}
                        className="swiper-button-prev !h-11 !w-11 !-translate-x-2 rounded-full border border-gray-200 bg-white !text-slate-400 after:hidden sm:!-translate-x-2.5 dark:border-gray-800 dark:bg-gray-950 dark:!text-slate-200 [&.swiper-button-disabled]:cursor-not-allowed [&.swiper-button-disabled]:!text-slate-200 [&.swiper-button-disabled]:dark:!text-slate-400"
                    >
                        <Icon
                            className="text-2xl leading-none text-current"
                            name="chevron-left"
                        />
                    </div>
                    <div
                        ref={(node) => setNextEl(node)}
                        className="swiper-button-next !h-11 !w-11 !translate-x-2 rounded-full border border-gray-200 bg-white !text-slate-400 after:hidden sm:!translate-x-2.5 dark:border-gray-800 dark:bg-gray-950 dark:!text-slate-200 [&.swiper-button-disabled]:cursor-not-allowed [&.swiper-button-disabled]:!text-slate-200 [&.swiper-button-disabled]:dark:!text-slate-400"
                    >
                        <Icon
                            className="text-2xl leading-none text-current"
                            name="chevron-right"
                        />
                    </div>
                </Swiper>
            </Block>
        </>
    );
};

export default ProductsDetailsPage;
