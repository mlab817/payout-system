import React from 'react'
import {Inertia} from "@inertiajs/inertia";

const ServicePlanIndex = ({ service_plans }) => {
    const showOperator = (operator) => {
        alert(operator)
        return Inertia.visit('/operators', {
            data: {
                operator: operator.id
            }
        })
    }

    return (
        <div className="container-fluid">
            <div>Service Plan Index</div>
            <div>
                <table className="table table-striped">
                    <thead>
                        <tr>
                            <th>Operator</th>
                            <th>Route</th>
                            <th>NAU</th>
                            <th>NOU</th>
                            <th>No. of Operating Hours</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Stations</th>
                            <th>Dwell Time (min)</th>
                            <th>Weekday Required Trips</th>
                            <th>Weekend Required Trips</th>
                            <th>Per Km</th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            service_plans.map((sp, index) => (
                                <tr key={index}>
                                    <td>
                                        <span onClick={() => showOperator(sp.operator)}>
                                            {sp.operator.name}
                                        </span>
                                    </td>
                                    <td>{sp.route.name}</td>
                                    <td>{sp.nau}</td>
                                    <td>{sp.nou}</td>
                                    <td>{sp.operating_hours_number}</td>
                                    <td>{sp.operating_hours_start}</td>
                                    <td>{sp.operating_hours_end}</td>
                                    <td>{sp.stations_count}</td>
                                    <td>{sp.dwell_time}</td>
                                    <td>
                                        {sp.weekday_required_trips}
                                    </td>
                                    <td>
                                        {sp.weekend_required_trips}
                                    </td>
                                    <td>
                                        {sp.payment_scheme.price_per_km}
                                    </td>
                                </tr>)
                            )
                        }
                    </tbody>

                </table>

            </div>
        </div>

    )
}

export default ServicePlanIndex
