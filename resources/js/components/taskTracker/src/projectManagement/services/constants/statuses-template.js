const createStatus = (isActive, order, name, color, isCompleted) => {
    return {
        is_active: isActive,
        order: order,
        status_name: name,
        color: color,
        is_completed: isCompleted
    };
};

export const statuses = {
    "Custom": [
        createStatus(true, 1, "Open", "red", false),
        createStatus(true, 2, "In Progress", "yellow", false),
        createStatus(true, 3, "Completed", "green", true)
    ],
    "Content": [
        createStatus(false, 1, "Open", "red", false),
        createStatus(false, 2, "Ready", "yellow", false),
        createStatus(false, 3, "Writing", "yellow", false),
        createStatus(false, 4, "Approval", "yellow", false),
        createStatus(false, 5, "Rejected", "red", false),
        createStatus(false, 6, "Publish", "green", true)
    ],
    "Kanban": [
        createStatus(false, 1, "Open", "red", false),
        createStatus(false, 2, "In Progress", "yellow", false),
        createStatus(false, 3, "Review", "yellow", false),
        createStatus(false, 4, "Completed", "green", true)
    ],
    "Marketing": [
        createStatus(false, 1, "Open", "red", false),
        createStatus(false, 2, "Concept", "yellow", false),
        createStatus(false, 3, "In Progress", "yellow", false),
        createStatus(false, 4, "Running", "yellow", false),
        createStatus(false, 5, "Review", "yellow", false),
        createStatus(false, 6, "Completed", "green", true)
    ],
    "Scrum": [
        createStatus(false, 1, "Open", "red", false),
        createStatus(false, 2, "Pending", "yellow", false),
        createStatus(false, 3, "In Progress", "yellow", false),
        createStatus(false, 4, "Completed", "green", false),
        createStatus(false, 5, "In Review", "yellow", false),
        createStatus(false, 6, "Accepted", "green", false),
        createStatus(false, 7, "Rejected", "red", false),
        createStatus(false, 8, "Blocked", "red", true)
    ],
    "Normal": [
        createStatus(false, 1, "Open", "red", false),
        createStatus(false, 2, "In Progress", "yellow", false),
        createStatus(false, 3, "Completed", "green", true)
    ],
};
