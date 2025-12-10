$(document).ready(function() {
    // Initialize tasks array (in real project, this would come from a database)
    let tasks = JSON.parse(localStorage.getItem('jqueryTasks')) || [];
    let currentFilter = 'all';

    // Function to save tasks to localStorage
    function saveTasks() {
        localStorage.setItem('jqueryTasks', JSON.stringify(tasks));
        updateStats();
        renderTasks();
    }

    // Function to update statistics
    function updateStats() {
        const total = tasks.length;
        const completed = tasks.filter(task => task.completed).length;
        const pending = total - completed;

        $('#totalTasks').text(total);
        $('#completedTasks').text(completed);
        $('#pendingTasks').text(pending);
    }

    // Function to render tasks based on filter
    function renderTasks() {
        $('#taskList').empty();
        
        let filteredTasks = tasks;
        if (currentFilter === 'pending') {
            filteredTasks = tasks.filter(task => !task.completed);
        } else if (currentFilter === 'completed') {
            filteredTasks = tasks.filter(task => task.completed);
        }

        if (filteredTasks.length === 0) {
            $('#emptyState').show();
        } else {
            $('#emptyState').hide();
            filteredTasks.forEach((task, index) => {
                const taskItem = $(`
                    <li class="task-item ${task.completed ? 'completed' : ''}" data-id="${task.id}">
                        <div class="task-content">
                            <input type="checkbox" class="task-checkbox" ${task.completed ? 'checked' : ''}>
                            <span class="task-text">${task.text}</span>
                        </div>
                        <div class="task-actions">
                            <button class="btn-icon delete-btn" title="Delete task">🗑️</button>
                        </div>
                    </li>
                `);
                
                $('#taskList').append(taskItem);
            });
        }
    }

    // Add new task
    $('#addTaskBtn').click(function() {
        const taskText = $('#taskInput').val().trim();
        
        if (taskText) {
            const newTask = {
                id: Date.now(), // Simple unique ID
                text: taskText,
                completed: false,
                createdAt: new Date().toISOString()
            };
            
            tasks.push(newTask);
            $('#taskInput').val('');
            saveTasks();
            
            // Add animation for new task
            $('.task-item:last-child').css('animation', 'slideIn 0.3s ease');
        }
    });

    // Also add task on Enter key
    $('#taskInput').keypress(function(e) {
        if (e.which === 13) { // Enter key
            $('#addTaskBtn').click();
        }
    });

    // Task actions (using event delegation for dynamic elements)
    $('#taskList').on('click', '.task-checkbox', function() {
        const taskId = parseInt($(this).closest('.task-item').data('id'));
        const taskIndex = tasks.findIndex(task => task.id === taskId);
        
        if (taskIndex !== -1) {
            tasks[taskIndex].completed = !tasks[taskIndex].completed;
            saveTasks();
        }
    });

    // Delete task
    $('#taskList').on('click', '.delete-btn', function() {
        const taskId = parseInt($(this).closest('.task-item').data('id'));
        tasks = tasks.filter(task => task.id !== taskId);
        saveTasks();
    });

    // Filter tasks
    $('.filter-btn').click(function() {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        currentFilter = $(this).data('filter');
        renderTasks();
    });

    // Initialize the app
    updateStats();
    renderTasks();
    
    // Focus on input field on page load
    $('#taskInput').focus();
});