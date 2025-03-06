import Image from "next/image";
import { Event } from "@/app/evenements/event";

export default function EventCard({ event }: { event: Event }) {
  return (
    <a href={"/evenements/" + event.id}>
      <div className="w-[350px] h-[450px] bg-white m-4">
        <Image
          src={event.cover_image}
          alt="Image description"
          layout="responsive"
          width={500}
          height={500}
          style={{ maxHeight: "100%", width: "auto" }}
        />
        <h1 className="text-3xl text-center my-6">{event.title}</h1>
        <p className="text-xl px-3">Quand : {event.date}</p>
        <p className="text-xl px-3">Où : {event.location}</p>
        <p className="text-xl px-3">Pourquoi : {event.reason}</p>
      </div>
    </a>
  );
}
