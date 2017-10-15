	create table roles (
		id int unsigned auto_increment not null primary key,
		name  varchar(100) not null,
		created_at timestamp  null,
		updated_at  timestamp null
		
	);

	create table users (
		id int unsigned auto_increment not null primary key,
		role_id int unsigned not null,
		username  varchar(499) not null,
		email  varchar(499) not null,
		password  varchar(499) not null,
		first_name  varchar(499) not null,
		middle_name  varchar(499)  null,
		last_name  varchar(499) not null,
		gender  varchar(499) not null,
		address   varchar(499) not null,
		city varchar(499) not null,
		zip_code   varchar(499) not null,
		birth_date date not null,   
		contact_no varchar(255) null,
		remember_token  varchar(100)  null,
		active boolean not null,
		created_at timestamp  null,
		updated_at  timestamp null,
		constraint fk_users_role_id foreign key (role_id)
		references roles(id)
		
	);

	create table tbl_room (
		room_id int unsigned auto_increment not null primary key,
		room_number varchar(255) not null,
		room_name varchar(255) not null,
		room_active boolean not null,    
		room_reg_date datetime not null
		
	);

	create table tbl_staff (

		staff_id int unsigned auto_increment not null primary key,
		users_id int unsigned not null,
		constraint fk_staff_users_id foreign key (users_id)
		references users(id)

		
	);


	create table tbl_doctor (
		doctor_id int unsigned auto_increment not null primary key,
		users_id int unsigned not null,
		room_id int unsigned  null,
		constraint fk_doctor_room_id foreign key (room_id)
		references tbl_room(room_id),
		constraint fk_doctor_users_id foreign key (users_id)
		references users(id)
		
	);



		create table tbl_student (
		student_id int unsigned auto_increment not null primary key,
		student_number varchar(255) not null,
		student_firstname varchar(255) not null,
		student_middlename varchar(255) not null,
		student_lastname varchar(255) not null,
		student_gender  varchar(255) not null,
		student_email varchar(255) not null,
		student_address varchar(255) not null,
		student_city varchar(255) not null,
		student_zip_code varchar(255) not null,
		student_birthdate date not null,    
		student_reg_date datetime not null
	);


	create table tbl_student_course (
		student_course_id int unsigned auto_increment not null primary key,
		student_id int unsigned not null,
		student_status varchar(255) not null,
		student_course_name varchar(255) not null,
		student_course_section varchar(255) null,
		student_course_date_added date not null,
		student_course_date_expiry date not null,
		student_course_active boolean not null,
		constraint fk_student_course_student_id foreign key (student_id)
		references tbl_student(student_id)

		
	);



		
	create table tbl_employee (
		employee_id int unsigned auto_increment not null primary key,
		employee_number varchar(255) not null,
		employee_firstname varchar(255) not null,
		employee_middlename varchar(255) null,
		employee_lastname varchar(255) not null,
		employee_gender  varchar(255) not null,
		employee_email varchar(255) null,
		employee_address varchar(255) not null,
		employee_city varchar(255) not null,
		employee_zip_code varchar(255) not null,
		employee_birthdate date not null,    
		employee_reg_date datetime not null,
		employee_position varchar(255) not null,
		employee_active boolean not null
		


	);


	create table tbl_patient (
		patient_id int unsigned auto_increment not null primary key,
		users_id int unsigned not null,
		staff_id int unsigned not null,
		employee_id int unsigned null,
		student_id int unsigned null,
		patient_account_no varchar(255) not null,
		patient_reg_date datetime not null,
		
		constraint fk_patient_staff_id foreign key (staff_id)
		references tbl_staff(staff_id),
			
		constraint fk_patient_employee_id foreign key (employee_id)
		references tbl_employee(employee_id),
		
		constraint fk_patient_student_id foreign key (student_id)
		references tbl_student(student_id),
		
		constraint fk_patient_users_id foreign key (users_id)
		references users(id)
		
		
	);
	create table t_vitals (
		vitals_id int unsigned auto_increment not null primary key,
		staff_id int unsigned not null,
		patient_id int unsigned not null,
		vitals_patient_weight_kilos decimal(7,3) not null,
		vitals_patient_height_cm double not null,
		vitals_patient_bpsystoli numeric not null,
		vitals_patient_diastolic numeric not null,
		vitals_patient_temp_celsius numeric not null,
		vitals_patient_pulse_rate_min numeric not null,
		vitals_patient_heart_rate_min numeric not null,
		vitals_patient_respiration_rate_min numeric not null,
		vitals_date_time datetime not null,
		
		constraint fk_vitals_staff_id foreign key (staff_id)
		references tbl_staff(staff_id),
		
		constraint fk_patient_patient_id foreign key (patient_id)
		references tbl_patient(patient_id)
		
		
	);

		create table tbl_appointment_type (
		appointment_type_id int unsigned auto_increment not null primary key,
		appointment_type_duration int not null,
		appointment_type_allowance int not null,
		appointment_type_title varchar(255) not null,
		appointment_type_description varchar(255) not null

		
		
		
	);
	
	create table t_appointment (
		appointment_id int unsigned auto_increment not null primary key,
		staff_id int unsigned not null,
		patient_id int unsigned not null,
		doctor_id int unsigned not null,
		appointment_type_id int unsigned not null,
		appointment_no varchar(255) not null,
		appointment_reason varchar(255) not null,
		appointment_date_recorded datetime not null,
		appointment_datetime_started datetime not null,
		appointment_datetime_ended datetime null,
		appointment_datetime_allowance_end datetime null,
		appointment_cancel_reason varchar(255) null,
		appointment_status_done boolean not null,
		appointment_status boolean not null,
		
		constraint fk_appointment_staff_id foreign key (staff_id)
		references tbl_staff(staff_id),
			
		constraint fk_appointment_doctor_id foreign key (doctor_id)
		references tbl_doctor(doctor_id),
		
		constraint fk_appointment_patient_id foreign key (patient_id)
		references tbl_patient(patient_id),
		
		constraint fk_appointment_appointment_type_id foreign key (appointment_type_id)
		references tbl_appointment_type(appointment_type_id)
		
		
	);
	
	
		create table t_walk_in_request (
		walk_in_id int unsigned auto_increment not null primary key,
		staff_id int unsigned not null,
		patient_id int unsigned not null,
		doctor_id int unsigned not null,
		walk_in_level_emergency varchar(250) not null,
		walk_in_no varchar(255) not null,
		walk_in_reason varchar(255) not null,
		walk_in_date_recorded datetime not null,
		walk_in_status boolean not null,
		
		constraint fk_walk_in_staff_id foreign key (staff_id)
		references tbl_staff(staff_id),
			
		constraint fk_walk_in_doctor_id foreign key (doctor_id)
		references tbl_doctor(doctor_id),
		
		constraint fk_walk_in_patient_id foreign key (patient_id)
		references tbl_patient(patient_id)
		
		
	);

	create table t_visit (
		visit_id int unsigned auto_increment not null primary key,
		appointment_id int unsigned null,
		walk_in_id int unsigned null,
		visit_date_time datetime not null,
		visit_patient_symptomps varchar(750) not null,
		visit_remarks  varchar(250) not null,
		visit_status boolean not null,
		
		constraint fk_visit_appointment_id foreign key (appointment_id)
		references t_appointment(appointment_id),
		
		constraint fk_visit_walk_in_id foreign key (walk_in_id)
		references t_walk_in_request(walk_in_id)
			
		
	);
	create table tbl_diagnosis (
		diagnosis_id int unsigned auto_increment not null primary key,
		diagnosis_name varchar(255)  not null,
		diagnosis_description varchar(255)  not null
	   );
		
		create table tbl_diagnosis_visit (
		diagnosis_visit_id int unsigned auto_increment not null primary key,
		visit_id int unsigned not null,
		diagnosis_id int unsigned not null,
		diagnosis_visit_remarks varchar(255),
		constraint fk_diagnosis_visit_visit_id foreign key (visit_id)
		references t_visit(visit_id),
		 constraint fk_diagnosis_visit_diagnosis_id foreign key (diagnosis_id)
		references tbl_diagnosis(diagnosis_id)
			
		
	);


	create table tbl_medicine (
	
		medicine_id int unsigned auto_increment not null primary key,
		staff_id int unsigned  null,
		medicine_generic_name varchar(255) not null,
		medicine_branded_name varchar(255) not null,
		medicine_company_brand varchar(255) not null,
		medicine_packaging varchar(255) not null,
		medicine_dosage varchar(255) not null,
		medicine_precautions varchar(255) not null,
		medicine_date_added datetime not null,
		medicine_active boolean not null,
		constraint fk_medicine_staff_id foreign key (staff_id)
		references tbl_staff(staff_id)
		
	);

		
	create table tbl_prescription (
		prescription_id int unsigned auto_increment not null primary key,
		visit_id int unsigned not null,
		medicine_id int unsigned not null,
		constraint fk_prescription_visit_id foreign key (visit_id)
		references t_visit(visit_id),
		constraint fk_prescription_medicine_id foreign key (medicine_id)
		references tbl_medicine(medicine_id)
			
		
	);


	create table tbl_medicine_stored (
		medicine_stored_id int unsigned auto_increment not null primary key,
		medicine_id int unsigned not null,
		staff_id int unsigned not null,
		medicine_stored_no varchar(255) not null,
		medicine_stored_qty int not null,
		medicine_received_date datetime not null,
		medicine_expiry_date datetime not null,
		
		constraint fk_medicine_stored_staff_id foreign key (staff_id)
		references tbl_staff(staff_id),
			constraint fk_medicine_stored_medicine_id foreign key (medicine_id)
		references tbl_medicine(medicine_id)
		
	);
	create table t_medicine_issuance (
		medicine_issuance_id int unsigned auto_increment not null primary key,
		staff_id int unsigned not null,
		patient_id int  unsigned not null,
		medicine_issuance_no varchar(255) not null,
		medicine_issued_date datetime not null,
		medicine_issuance_status boolean not null,
		constraint fk_medicine_issued_staff_id foreign key (staff_id)
		references tbl_staff(staff_id),
		constraint fk_medicine_issued_patient_id foreign key (patient_id)
		references tbl_patient(patient_id)
		
	);

		create table t_medicine_issuance_value(
		medicine_issuance_value_id int unsigned auto_increment not null primary key,
		medicine_issuance_id int unsigned not null,
		medicine_stored_id int unsigned not null,
		medicine_issuance_value_qty int not null,

		constraint fk_medicine_issued_medicine_issuance_id foreign key (medicine_issuance_id)
		references t_medicine_issuance(medicine_issuance_id),

		constraint fk_medicine_issued_medicine_stored_id foreign key (medicine_stored_id)
		references tbl_medicine_stored(medicine_stored_id)
		
	);
	create table tbl_lab_request (
		lab_request_id int unsigned auto_increment not null primary key,
		visit_id int unsigned not null,
		lab_request_date datetime not null,
		lab_request_type  varchar(499) not null,
		constraint fk_lab_request_visit_id foreign key (visit_id)
		references t_visit(visit_id)
		
	);	
	create table tbl_lab_result (
		lab_result_id int unsigned auto_increment not null primary key,
		lab_request_id int unsigned not null,
		lab_result_date datetime not null,
		lab_request_findings  varchar(499) not null,
		constraint fk_lab_result_lab_request_id foreign key (lab_request_id)
		references tbl_lab_request(lab_request_id)
		
	);	
	create table tbl_utility (
		utility_id int unsigned auto_increment not null primary key,
		staff_id int unsigned not null,
		utility_number  varchar(499) not null,
		utility_name  varchar(499) not null,
		utility_issued_date datetime not null,
		utility_description  varchar(499) not null,
		utility_active boolean not null,
		constraint fk_utility_staff_id foreign key (staff_id)
		references tbl_staff(staff_id)
	
		
	);

	create table tbl_utility_stored (
		utility_stored_id int unsigned auto_increment not null primary key,
		utility_id int unsigned not null,
		staff_id int unsigned not null,
		utility_stored_code_number int null,
		utility_stored_received_date datetime not null,
		utility_stored_remarks  varchar(499) not null,
		utility_stored_status boolean not null,
		constraint fk_utility_stored_utility_id foreign key (utility_id)
		references tbl_utility(utility_id),
		constraint fk_utility_stored_staff_id foreign key (staff_id)
		references tbl_staff(staff_id)
		
	);
	
	
