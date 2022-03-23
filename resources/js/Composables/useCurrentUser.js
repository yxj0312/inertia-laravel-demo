import User from "@/Models/User"
import {Inertia} from '@inertiajs/inertia'

export function UseCurrentUser() {
    return new User(Inertia.page.props.auth.user)
}