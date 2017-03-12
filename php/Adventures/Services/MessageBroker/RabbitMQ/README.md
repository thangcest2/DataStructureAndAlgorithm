### Documentation for RabbitMQ: 

######Official Docs:
https://www.rabbitmq.com/tutorials/tutorial-two-php.html

######Demo:
# Part 1: Declare job and run job 
    - Open 1 terminal tab, Run `php receiver.php`
    - Open 1 terminal tab, Run `php send.php`, see output in `php receiver.php result`
     
# Part 2: Declare job and run many jobs with many workers 
     - Open some terminal tabs, Run `php worker.php`
     - Open 1 terminal tab, Run `php new_task.php hello ...` (... are number of delay seconds), see output in `php receiver.php results`

# Part 3: Monitor workers via rabbitmqctl or web interface
    - Enable web interface by running this command:
        `
        rabbitmq-plugins enable rabbitmq_management
        `
        This step will ask you username, password
    - Open web browser: http://localhost:15672

# Part 4: Configure to run jobs with Supervisor: http://supervisord.org
 (supervisor is tool to manage processes.)

    - Check this file for sample config file: php/Adventure/Services/MessageBroker/Supervisord/supervisord.conf
    - Add below code to end of file: /etc/supervisord.conf
        `
        [include]
        files = /etc/supervisord.conf.d/*.conf
        `

    - Manage 4 nodes of workers with supervisor as configure file:
        + Check file 'new_task_nodes_supervisord_config_sample' in this folder.
        + Put this file into /etc/supervisord.conf.d/task_queues.conf
        + Login to supervisorctl and manage workers | or by web interface. See file
            `
                sudo supervisorctl (this will enter interactive tool)
                help (to see) avail commands
                reread task_queues
                add task_queues
                status (check status that worker is RUNNING)
            `
    