=begin
#FlowAccount Open API

#No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.4.0

=end

require 'date'
require 'time'

module OpenapiClient
  class CreditCard
    attr_accessor :id

    attr_accessor :company_id

    attr_accessor :chart_of_account_id

    attr_accessor :chart_of_account

    attr_accessor :bank_id

    attr_accessor :bank

    attr_accessor :bank_name

    attr_accessor :type

    attr_accessor :card_number

    attr_accessor :card_holder_name

    attr_accessor :card_name

    attr_accessor :cash_limit

    attr_accessor :statement_date

    attr_accessor :due_date

    attr_accessor :status

    attr_accessor :is_delete

    attr_accessor :created_on

    attr_accessor :modified_on

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'id' => :'id',
        :'company_id' => :'companyId',
        :'chart_of_account_id' => :'chartOfAccountId',
        :'chart_of_account' => :'chartOfAccount',
        :'bank_id' => :'bankId',
        :'bank' => :'bank',
        :'bank_name' => :'bankName',
        :'type' => :'type',
        :'card_number' => :'cardNumber',
        :'card_holder_name' => :'cardHolderName',
        :'card_name' => :'cardName',
        :'cash_limit' => :'cashLimit',
        :'statement_date' => :'statementDate',
        :'due_date' => :'dueDate',
        :'status' => :'status',
        :'is_delete' => :'isDelete',
        :'created_on' => :'createdOn',
        :'modified_on' => :'modifiedOn'
      }
    end

    # Returns all the JSON keys this model knows about
    def self.acceptable_attributes
      attribute_map.values
    end

    # Attribute type mapping.
    def self.openapi_types
      {
        :'id' => :'Integer',
        :'company_id' => :'Integer',
        :'chart_of_account_id' => :'Integer',
        :'chart_of_account' => :'OneOfChartOfAccount',
        :'bank_id' => :'Integer',
        :'bank' => :'OneOfBank',
        :'bank_name' => :'String',
        :'type' => :'CreditCardType',
        :'card_number' => :'String',
        :'card_holder_name' => :'String',
        :'card_name' => :'String',
        :'cash_limit' => :'Float',
        :'statement_date' => :'Integer',
        :'due_date' => :'Integer',
        :'status' => :'BankingChannelsStatus',
        :'is_delete' => :'Boolean',
        :'created_on' => :'Time',
        :'modified_on' => :'Time'
      }
    end

    # List of attributes with nullable: true
    def self.openapi_nullable
      Set.new([
        :'chart_of_account_id',
        :'chart_of_account',
        :'bank',
        :'bank_name',
        :'card_number',
        :'card_holder_name',
        :'card_name',
      ])
    end

    # Initializes the object
    # @param [Hash] attributes Model attributes in the form of hash
    def initialize(attributes = {})
      if (!attributes.is_a?(Hash))
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::CreditCard` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::CreditCard`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'id')
        self.id = attributes[:'id']
      end

      if attributes.key?(:'company_id')
        self.company_id = attributes[:'company_id']
      end

      if attributes.key?(:'chart_of_account_id')
        self.chart_of_account_id = attributes[:'chart_of_account_id']
      end

      if attributes.key?(:'chart_of_account')
        self.chart_of_account = attributes[:'chart_of_account']
      end

      if attributes.key?(:'bank_id')
        self.bank_id = attributes[:'bank_id']
      end

      if attributes.key?(:'bank')
        self.bank = attributes[:'bank']
      end

      if attributes.key?(:'bank_name')
        self.bank_name = attributes[:'bank_name']
      end

      if attributes.key?(:'type')
        self.type = attributes[:'type']
      end

      if attributes.key?(:'card_number')
        self.card_number = attributes[:'card_number']
      end

      if attributes.key?(:'card_holder_name')
        self.card_holder_name = attributes[:'card_holder_name']
      end

      if attributes.key?(:'card_name')
        self.card_name = attributes[:'card_name']
      end

      if attributes.key?(:'cash_limit')
        self.cash_limit = attributes[:'cash_limit']
      end

      if attributes.key?(:'statement_date')
        self.statement_date = attributes[:'statement_date']
      end

      if attributes.key?(:'due_date')
        self.due_date = attributes[:'due_date']
      end

      if attributes.key?(:'status')
        self.status = attributes[:'status']
      end

      if attributes.key?(:'is_delete')
        self.is_delete = attributes[:'is_delete']
      else
        self.is_delete = false
      end

      if attributes.key?(:'created_on')
        self.created_on = attributes[:'created_on']
      end

      if attributes.key?(:'modified_on')
        self.modified_on = attributes[:'modified_on']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if @company_id.nil?
        invalid_properties.push('invalid value for "company_id", company_id cannot be nil.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if @company_id.nil?
      true
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          id == o.id &&
          company_id == o.company_id &&
          chart_of_account_id == o.chart_of_account_id &&
          chart_of_account == o.chart_of_account &&
          bank_id == o.bank_id &&
          bank == o.bank &&
          bank_name == o.bank_name &&
          type == o.type &&
          card_number == o.card_number &&
          card_holder_name == o.card_holder_name &&
          card_name == o.card_name &&
          cash_limit == o.cash_limit &&
          statement_date == o.statement_date &&
          due_date == o.due_date &&
          status == o.status &&
          is_delete == o.is_delete &&
          created_on == o.created_on &&
          modified_on == o.modified_on
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [id, company_id, chart_of_account_id, chart_of_account, bank_id, bank, bank_name, type, card_number, card_holder_name, card_name, cash_limit, statement_date, due_date, status, is_delete, created_on, modified_on].hash
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def self.build_from_hash(attributes)
      new.build_from_hash(attributes)
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def build_from_hash(attributes)
      return nil unless attributes.is_a?(Hash)
      self.class.openapi_types.each_pair do |key, type|
        if attributes[self.class.attribute_map[key]].nil? && self.class.openapi_nullable.include?(key)
          self.send("#{key}=", nil)
        elsif type =~ /\AArray<(.*)>/i
          # check to ensure the input is an array given that the attribute
          # is documented as an array but the input is not
          if attributes[self.class.attribute_map[key]].is_a?(Array)
            self.send("#{key}=", attributes[self.class.attribute_map[key]].map { |v| _deserialize($1, v) })
          end
        elsif !attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", _deserialize(type, attributes[self.class.attribute_map[key]]))
        end
      end

      self
    end

    # Deserializes the data based on type
    # @param string type Data type
    # @param string value Value to be deserialized
    # @return [Object] Deserialized data
    def _deserialize(type, value)
      case type.to_sym
      when :Time
        Time.parse(value)
      when :Date
        Date.parse(value)
      when :String
        value.to_s
      when :Integer
        value.to_i
      when :Float
        value.to_f
      when :Boolean
        if value.to_s =~ /\A(true|t|yes|y|1)\z/i
          true
        else
          false
        end
      when :Object
        # generic object (usually a Hash), return directly
        value
      when /\AArray<(?<inner_type>.+)>\z/
        inner_type = Regexp.last_match[:inner_type]
        value.map { |v| _deserialize(inner_type, v) }
      when /\AHash<(?<k_type>.+?), (?<v_type>.+)>\z/
        k_type = Regexp.last_match[:k_type]
        v_type = Regexp.last_match[:v_type]
        {}.tap do |hash|
          value.each do |k, v|
            hash[_deserialize(k_type, k)] = _deserialize(v_type, v)
          end
        end
      else # model
        # models (e.g. Pet) or oneOf
        klass = OpenapiClient.const_get(type)
        klass.respond_to?(:openapi_one_of) ? klass.build(value) : klass.build_from_hash(value)
      end
    end

    # Returns the string representation of the object
    # @return [String] String presentation of the object
    def to_s
      to_hash.to_s
    end

    # to_body is an alias to to_hash (backward compatibility)
    # @return [Hash] Returns the object in the form of hash
    def to_body
      to_hash
    end

    # Returns the object in the form of hash
    # @return [Hash] Returns the object in the form of hash
    def to_hash
      hash = {}
      self.class.attribute_map.each_pair do |attr, param|
        value = self.send(attr)
        if value.nil?
          is_nullable = self.class.openapi_nullable.include?(attr)
          next if !is_nullable || (is_nullable && !instance_variable_defined?(:"@#{attr}"))
        end

        hash[param] = _to_hash(value)
      end
      hash
    end

    # Outputs non-array value in the form of hash
    # For object, use to_hash. Otherwise, just return the value
    # @param [Object] value Any valid value
    # @return [Hash] Returns the value in the form of hash
    def _to_hash(value)
      if value.is_a?(Array)
        value.compact.map { |v| _to_hash(v) }
      elsif value.is_a?(Hash)
        {}.tap do |hash|
          value.each { |k, v| hash[k] = _to_hash(v) }
        end
      elsif value.respond_to? :to_hash
        value.to_hash
      else
        value
      end
    end

  end

end
