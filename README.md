--- Branding: ---

Logo: ![Dream it, Raffle it, Win it!](https://github.com/user-attachments/assets/1cfbd429-8396-4f9b-972b-6d770734df34)

Slogan: Dream it, Raffle it, Win it!

Color Palette: ![image](https://github.com/user-attachments/assets/65b30aa6-74d6-40a2-ba8d-5be0be2cf715)


--- Project Structure: ---
# 🎟️ Platform for Online Raffle Ticket Sales

## 1. General Description.
The project consists of the development of a web platform that allows the sale of tickets to participate in raffles organized by users. The raffles will be linked to the drawings of the Medellin Lottery, and each ticket purchased corresponds to a random number that gives the user the opportunity to win.

*Types of users on the platform:*.
- 👑 *Administrator*: Manages the platform, users and raffles.
- 🌟 *Organizer*: Creates raffles, buys ballots and manages his raffles.
- 👤 *Customer*: Buys tickets for active raffles and participates in them.
- 👥 *Guests*: Explore the platform, but must register to participate.

## 2. Project Objective.
To offer a secure and simple platform that allows:  
- To organizers, *create customized raffles*.  
- To customers, *purchase tickets* and participate in raffles.  
- To administrators, *supervise* raffles and manage users.  

## 3. Main functionalities

### 3.1. Functionalities per Role
- *Administrator* 👑  
  - Manage raffles (activate, deactivate, delete).
  - Manage users (suspend accounts, change roles).
  - View sales reports 📊.
  - Monitor active and completed raffles.

- Organizer 🌟 🌟  
  - Create raffles indicating:
    - Name, description, price per ballot.
    - Maximum number of ballots and deadline.
  - View statistics 📈 of participation.
  - Purchase ballots as a customer.

- Customer 👤 👤  
  - View available raffles.
  - Buy tickets for active raffles.
  - Consult purchase history.

- *Guest* 👥  
  - Browse active raffles and general statistics.
  - Register to participate.

## Process Flow

### 4.1. Flow of Raffle Creation
1. Organizer login.
2. Access the dashboard.
3. Create a raffle with the required data.
4. The raffle is visible to the users.
5. The organizer monitors the sales.

### 4.2. Ticket Purchase Flow
1. The customer selects a raffle.
2. Selects the number of ballots.
3. Random numbers are generated per ticket.
4. Make the payment 💳.
5. The ticket is linked to the user.

### 4.3. Management flow by the Administrator
1. Administrator login.
2. Access to the management panel.
3. Manage raffles and users.

### 4.4. Registration and Access
1. The guest explores the platform.
2. The guest registers to buy tickets.
3. Accesses the corresponding dashboard.

## Database structure.
- *Table users* 👤  
  id, name, email, password, role, created_at, updated_at

- *Table raffles* 🎟️  
  id, name, description, ballot_price, ballot_quantity, organizer_id, deadline_date

- *Table ballots* 🛒  
  id, raffle_id, user_id, ballot_number, created_at

- *Purchase table* 💳  
  id, ballot_id, user_id, created_at

## 6. Technical Requirements
- *Backend*: Laravel
- *Authentication*: Jetstream with roles and permissions
- *Frontend*: Blade + TailwindCSS
- *Database*: MySQL
- *Payments*: Integration with gateways (PayU/Stripe).

## 7. Security and Validations
- *Secure authentication* with Fortify and optional 2FA.
- Access control* with Gates or Policies.
- Forms validation.
- *Secure payments* through gateways.

## 8. UI/UX
- *Home screen*: Active raffles and registration/login buttons.
- *Dashboard*:
  - *Customer*: Purchase history.
  - *Organizer*: Raffles and statistics.
  - Administrator*: Complete management.
- Ballots purchase: Simple and secure process.

## 9. Use Cases
1. An organizer creates a raffle with 100 ballots and all of them are sold.
2. An administrator deactivates a raffle for violating policies.
3. A customer participates in several raffles.
4. An unregistered user registers and buys tickets.

## 10. Conclusion
This project seeks to develop a robust and secure platform for online raffles, allowing organizers to manage raffles and users to participate easily. Oversight by administrators ensures transparency and proper operation of the system.
