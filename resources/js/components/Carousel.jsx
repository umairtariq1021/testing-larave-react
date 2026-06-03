import React from 'react'
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import { arr } from "../assets/imageExport"

const settings = {
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 600,
    autoplaySpeed: 4000,
    adaptiveHeight: false,
    cssEase: "ease-in-out",
    dots: true,
    arrows: true,
};

const Carousel = () => {
    return (
        <div className="w-full max-w-[95%] mx-auto my-4 overflow-hidden [&_.slick-slide]:outline-none [&_.slick-dots]:bottom-4">
            <Slider {...settings}>
                {arr.map((src, index) => (
                    <div key={index} className="px-1">
                        <img
                            src={src}
                            alt={`Slide ${index + 1}`}
                            className="w-full h-[45vh] sm:h-[50vh] md:h-[55vh] object-cover rounded-lg"
                            draggable={false}
                        />
                    </div>
                ))}
            </Slider>
        </div>
    )
}

export default Carousel
